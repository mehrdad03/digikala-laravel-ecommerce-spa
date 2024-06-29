<?php

namespace App\Repositories\admin;

interface AdminStateRepositoryInterface
{

    public function submit($formData, $stateId);
}
