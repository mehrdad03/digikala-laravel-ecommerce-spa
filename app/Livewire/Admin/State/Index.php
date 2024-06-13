<?php

namespace App\Livewire\Admin\State;

use App\Models\Country;
use App\Models\State;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $countries = [];
    public $stateId ;

    public function mount()
    {
        $this->countries = Country::all();

    }

    public function submit($formData, State $state)
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
        $state->submit($formData, $this->stateId);
        $this->reset();
        $this->dispatch('success', 'عملیات با موفقیت انجام شد!');

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
