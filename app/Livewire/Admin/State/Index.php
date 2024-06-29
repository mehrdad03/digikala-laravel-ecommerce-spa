<?php

namespace App\Livewire\Admin\State;

use App\Models\Country;
use App\Models\State;
use App\Repositories\admin\AdminProductRepositoryInterface;
use App\Repositories\admin\AdminStateRepositoryInterface;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $name;
    public $countries = [];
    public $stateId;
    public $countryId;

    private $repository;

    public function boot(AdminStateRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function mount()
    {
        $this->countries = Country::all();

    }

    public function submit($formData)
    {

        $validator = Validator::make($formData, [
            'name' => 'required|string|max:30',
            'countryId' => 'required|exists:countries,id',
        ], [
            '*.required' => 'فیلد ضروری است.',
            '*.string' => 'فرمت اشتباه است !',
            '*.max' => 'حداکثر تعداد کاراکترها : 30',
            'countryId.exists' => 'کشور نامعتبر است .',
        ]);

        $validator->validate();
        $this->resetValidation();
        $this->repository->submit($formData, $this->stateId);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد!');

    }

    public function edit($state_id)
    {

        $state = State::query()->where('id', $state_id)->first();

        if ($state) {
            $this->name = $state->name;
            $this->stateId = $state->id;
            $this->countryId = $state->country_id;
        }

    }


    public function delete($state_id)
    {

        State::query()->where('id', $state_id)->delete();
        $this->dispatch('success', 'عملیات حذف با موفقیت انجام شد!');


    }

    public function render()
    {
        $states = State::query()
            ->with('country')
            ->paginate(10);
        return view('livewire.admin.state.index', [
            'states' => $states
        ])->layout('layouts.admin.app');
    }
}
