<?php

namespace App\Livewire\Admin\Country;

use App\Models\Country;
use App\Repositories\admin\AdminCityRepositoryInterface;
use App\Repositories\admin\AdminCountryRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $name;
    public $countryId;


    private $repository;

    public function boot(AdminCountryRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function submit($formData)
    {
        $validator = Validator::make($formData, [
            'name' => 'required|string|max:30',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 30',
        ]);

        $validator->validate();
        $this->resetValidation();
        $this->repository->submit($formData, $this->countryId);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد!');

    }

    public function edit($country_id)
    {
        $country = Country::query()->where('id', $country_id)->first();

        if ($country) {
            $this->name = $country->name;
            $this->countryId = $country->id;
        }

    }


    public function delete($country_id)
    {

        Country::query()->where('id', $country_id)->delete();
        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد!');


    }


    public function render()
    {
        $countries = Country::query()->paginate(10);
        return view('livewire.admin.country.index', [
            'countries' => $countries
        ])->layout('layouts.admin.app');
    }
}
