<?php

namespace App\Repositories\admin;

use App\Models\Category;
use App\Models\CategoryFeature;
use App\Models\CategoryFeatureValue;
use App\Models\Slider;
use App\Models\Story;
use Illuminate\Support\Facades\Storage;

class AdminSliderRepository implements AdminSliderRepositoryInterface
{
    public function submit($formData,$image)
    {
        $imageFilename = pathinfo($image->hashName(), PATHINFO_FILENAME) . '.' . $image->extension();

        Slider::query()->create([
            'title' => $formData['title'],
            'image' => $imageFilename,
            'link' => $formData['link']
            /*   'admin_id'=>null,*/
        ]);

        Storage::disk('public')->put('sliders', $image);
    }

    public function delete($slider)
    {

        $image = $slider->image;
        \Illuminate\Support\Facades\File::delete('sliders/' . $image);
        $slider->delete();
    }

    public function changeStatus($slider)
    {
        if ($slider->status) {
            $slider->update(['status' => false]);
        } else {
            $slider->update(['status' => true]);
        }

    }


}
