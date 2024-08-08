<?php

namespace App\Livewire\Client\Auth;


use App\Models\User;
use App\Notifications\SendSmsNotification;
use App\Repositories\admin\AdminCityRepositoryInterface;
use App\Repositories\client\ClientAuthRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use Livewire\Component;

class Index extends Component
{
    public $submitCodeView = false;
    public $sendSmsError = '';
    public $userMobile;

    public $otpCode;
    public $codeErrorMessage;


    private $repository;

    public function boot(ClientAuthRepository $repository)
    {
        $this->repository = $repository;
    }

    public function sendSms($formData)
    {
        $validator = Validator::make($formData, [
            'mobile' => ['required', 'regex:/^09\d{9}$/'],
        ], [
            'required' => 'شماره موبایل الزامی است !',
            'regex' => 'شماره موبایل نامعتبر است!',
        ]);

        $validator->validate();
        $this->resetValidation();

        $activeCode = mt_rand(1000, 9999);

        $notification = new SendSmsNotification($formData['mobile'], 'sendOtpSms', $activeCode);

        try {
            Notification::sendNow($formData['mobile'], $notification);

            $this->submitCodeView = true;
            $this->userMobile = $formData['mobile'];
            $this->otpCode = $activeCode;


        } catch (\Exception $e) {

            $this->sendSmsError = "متاسفانه پیامک ارسال نشد. خطا: " . $e->getMessage();

        }


    }


    public function submitUser($formData)
    {

        $this->codeErrorMessage = false;

        $validator = Validator::make($formData, [
            'code' => ['required', 'numeric', 'digits:4'],
        ], [
            'required' => 'شماره موبایل الزامی است !',
            'digits' => 'کد باید 4 رقمی باشد!',
        ]);

        $validator->validate();
        $this->resetValidation();

        $checkUser = $this->repository->submitUserWithMobile($formData, $this->otpCode, $this->userMobile);

        if ($checkUser) {
            return redirect()->route('client.home');
        } else {
            $this->codeErrorMessage = 'کد نامعتبر است!';
        }

    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();

    }

    public function handleProviderCallback()
    {
        $repository = new ClientAuthRepository();

        $gmailUser = Socialite::driver('google')->stateless()->user();

        $repository->checkUser($gmailUser);

        return redirect()->route('client.home');

    }

    public function render()
    {
        return view('livewire.client.auth.index')->layout('layouts.client.app-auth');
    }
}
