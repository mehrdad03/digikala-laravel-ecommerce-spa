<?php

namespace App\Livewire\Seller\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Index extends Component
{
    public function submit($formData)
    {

        $validator = Validator::make($formData, [
            'email' => 'required|exists:sellers,email',
            'password' => 'required',
        ], [
            '*.required' => 'فیلد اجباری',
            'email.exists' => 'ایمیل نامعتبر است!',
        ]);
        $validator->validate();
        $this->resetValidation();

        $credentials = ['email' => $formData['email'], 'password' => $formData['password']];

        $seller = Auth::guard('seller');
        if ($seller->attempt($credentials)) {
            return redirect()->route('seller.dashboard.index');
        }
        else{
            session()->flash('message','ایمیل یا رمز عبور نامعتبر است.');
        }
    }
    public function logout()
    {
        Session::flush();
        Auth::guard('seller')->logout();
        return redirect()->route('seller.auth.login');

    }

    public function render()
    {
        return view('livewire.seller.auth.index')->layout('layouts.admin.auth');
    }
}
