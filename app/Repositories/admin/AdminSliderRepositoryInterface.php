<?php

namespace App\Repositories\admin;

interface AdminSliderRepositoryInterface
{
    public function submit($formData,$image);
    public function delete($slider);
    public function changeStatus($slider);
}
