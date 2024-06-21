<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;
use function Symfony\Component\Translation\t;


class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function submit($formData, $productId, $photos, $coverIndex)
    {

        DB::transaction(function () use ($formData, $productId, $photos, $coverIndex) {

            $product = $this->submitToProduct($formData, $productId);
            $this->submitToSeoItem($formData, $product->id);
            $this->submitToProductImage($photos, $product->id, $coverIndex);
            $this->saveImages($photos, $product->id);

        });

    }

    public function submitToProduct($formData, $productId)
    {

        return Product::query()->updateOrCreate(

            [
                'id' => $productId
            ],
            [
                'name' => $formData['name'],
                'price' => $formData['price'],
                'stock' => $formData['stock'],
                'featured' => $formData['featured'],
                'discount' => $formData['discount'],
                'discount_duration' => $formData['discount_duration'],
                'seller_id' => $formData['sellerId'],
                'category_id' => $formData['categoryId'],
                'p_code' => config('app.name') . '-' . $this->generateProductCode(),

            ]
        );

    }

    public function submitToSeoItem($formData, $productId)
    {
        SeoItem::query()->updateOrCreate(
            [
                'type' => 'product',
                'ref_id' => $productId

            ],
            [
                'slug' => $formData['slug'],
                'meta_title' => $formData['meta_title'],
                'meta_description' => $formData['meta_description'],
            ]
        );

    }

    public function submitToProductImage($photos, $productId, $coverIndex)
    {
        ProductImage::query()->where('product_id',$productId)->update(['is_cover'=>false]);

        foreach ($photos as $index => $photo) {

            $path = pathinfo($photo->hashName(), PATHINFO_FILENAME) . '.webp';

            ProductImage::query()->create(
                [
                    'path' => $path,
                    'product_id' => $productId,
                    'is_cover' => $index == $coverIndex,
                ]
            );
        }

    }

    public function saveImages($photos, $productId)
    {
        foreach ($photos as $photo) {
            $this->resizeImage($photo, $productId, 100, 100, 'small');
            $this->resizeImage($photo, $productId, 300, 300, 'medium');
            $this->resizeImage($photo, $productId, 800, 800, 'large');

            $photo->delete();

        }


    }

    public function resizeImage($photo, $productId, $width, $height, $folder)
    {
        $path = public_path('products/' . $productId . '/' . $folder);

        if (!file_exists($path)) {
            mkdir($path, 0755, true);
        }

        $manager = new ImageManager(new Driver());

        $manager->read($photo->getRealPath())
            ->scale($width, $height)
            ->toWebp()
            ->save($path . '/' . pathinfo($photo->hashName(), PATHINFO_FILENAME) . '.webp');
    }

    public function generateProductCode()
    {
        do {
            $randomCode = rand(1000, 100000000);
            $checkCode = Product::query()->where('p_code', $randomCode)->first();

        } while ($checkCode);

        return $randomCode;

    }

    public function category()
    {
        return $this->belongsTo(Category::class);

    }

    public function coverImage()
    {
        return $this->belongsTo(ProductImage::class, 'id', 'product_id')->where('is_cover', '=', true);

    }
    public function images()
    {
        return $this->hasMany(ProductImage::class);

    }
    public function seo()
    {
        return $this->belongsTo(SeoItem::class, 'id', 'ref_id');

    }

    public function removeProduct(Product $product)
    {
        DB::transaction(function () use ($product) {
            $product->delete();
            ProductImage::query()->where('product_id', $product->id)->delete();
            SeoItem::query()->where('ref_id', $product->id)->delete();
            File::deleteDirectory('products/' . $product->id);
        });
    }

}
