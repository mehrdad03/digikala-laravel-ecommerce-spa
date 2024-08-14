<?php

namespace App\Repositories\admin;

interface AdminStoryRepositoryInterface
{
    public function submit($formData,$thumbnail,$story);
    public function delete($story);
    public function changeStatus($story);
}
