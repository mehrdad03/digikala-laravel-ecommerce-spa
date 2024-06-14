<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function state()
    {
        return $this->belongsTo(State::class);

    }

    public function submit($formData, $stateId)
    {

        City::query()->updateOrCreate(
            [
                'id'=>$stateId
            ],
            [
                'name'=>$formData['name'],
                'state_id'=>$formData['stateId'],
            ]
        );
    }
}
