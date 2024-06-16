<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(Category::class,'category_id','id');

    }

    public function submit($formData, $categoryId)
    {
        if ($formData['parentId']==""){
            $formData['parentId']=null;
        }
        Category::query()->updateOrCreate(
            [
                'id'=>$categoryId
            ],
            [
                'name'=>$formData['name'],
                'category_id'=>$formData['parentId'],

            ]
        );
    }
}
