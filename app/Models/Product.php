<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function submit($formData, $productId)
    {

        $product=$this->submitToProduct($formData,$productId);
        $this->submitToSeoItem($formData,$product->id);





    }

    public function submitToProduct($formData,$productId)
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
                'discount_duration' => $formData['discount_duration'],
                'seller_id' => $formData['sellerId'],
                'category_id' => $formData['categoryId'],

            ]
        );

    }

    public function submitToSeoItem($formData,$productId)
    {
        SeoItem::query()->updateOrCreate(
            [
                'type'=>'product',
                'ref_id'=>$productId

            ],
            [
                'slug' => $formData['slug'],
                'meta_title' => $formData['meta_title'],
                'meta_description' => $formData['meta_description'],
            ]
        );

    }
}
