<?php

namespace App\Repositories\admin;

use App\Models\State;

class AdminStateRepository implements AdminStateRepositoryInterface
{
    public function submit($formData, $stateId)
    {

        State::query()->updateOrCreate(
            [
                'id'=>$stateId
            ],
            [
                'name'=>$formData['name'],
                'country_id'=>$formData['countryId'],
            ]
        );
    }

}
