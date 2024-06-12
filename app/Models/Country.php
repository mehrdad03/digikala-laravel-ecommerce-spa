<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function submit($formData)
    {
        Country::query()->create([
            'name' => $formData['name']
        ]);

    }
}
