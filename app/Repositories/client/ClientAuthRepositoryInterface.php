<?php

namespace App\Repositories\client;

interface ClientAuthRepositoryInterface
{
    public function checkUser($gmailUser);
    public function submitUserWithMobile($formData,$otpCode,$userMobile);

}
