<?php

namespace App\Repositories\admin;

use App\Models\City;

class AdminCityRepository implements AdminCityRepositoryInterface
{
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
