<?php

declare(strict_types=1);

namespace App\Http\Controllers\Factory;

use App\Domain\UserRegistration\UserRegistrationRequest;
use Illuminate\Http\Request;
use Symfony\Component\Uid\Uuid;

class UserRegistrationFactory
{
    public function requestToUserRegistrationDomainRequest(Request $request): UserRegistrationRequest
    {
        return new UserRegistrationRequest(
            uuid: Uuid::v6()->toRfc4122(),
            userName: $request->get('username'),
            phoneNumber: $request->get('phonenumber'),
        );
    }
}
