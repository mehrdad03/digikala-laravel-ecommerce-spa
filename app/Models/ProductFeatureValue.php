<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductFeatureValue extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function submit($formData, $productId)
    {

        foreach ($formData as $value) {

            list($featureId, $featureValueId) = explode('_', $value);
            ProductFeatureValue::query()->updateOrCreate(
                [
                    'product_id'=>$productId,
                    'category_feature_id'=>$featureId,
                ],
                [
                    'category_feature_value_id'=>$featureValueId,
                ]
            );


        }
    }
}
