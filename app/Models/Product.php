<?php

namespace App\Models;

use App\Events\ProductChanged;
use App\Traits\UploadFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Product extends Model
{
    use HasFactory, SoftDeletes, UploadFile;

    protected $dispatchesEvents = [
        'created' => ProductChanged::class,
        'updated' => ProductChanged::class,
        'deleted' => ProductChanged::class,
    ];

    protected $guarded = [];


    public function category()
    {
        return $this->belongsTo(Category::class);

    }

    public function coverImage()
    {
        return $this->belongsTo(ProductImage::class, 'id', 'product_id');

    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);

    }

    public function seo()
    {
        return $this->belongsTo(SeoItem::class, 'id', 'ref_id')->where('type','=','product');

    }

    public function seller()
    {
        return $this->belongsTo(Seller::class);

    }


}
