<?php

namespace App\Repositories\admin;

interface AdminCategoryRepositoryInterface
{
    public function submit($formData, $categoryId);
    public function submitCategoryFeatureValue($formData,$valueId ,$featureId);
    public function submitCategoryFeature($formData, $categoryId, $featureId);
}
