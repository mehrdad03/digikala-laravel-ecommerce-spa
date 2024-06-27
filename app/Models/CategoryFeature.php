<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryFeature extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];


    public function values()
    {
        return $this->hasMany(CategoryFeatureValue::class);

    }


    public function categoryFeatureValues()
    {
        return $this->hasMany(CategoryFeatureValue::class);

    }
}
