<?php

declare(strict_types=1);

namespace App\Domain\UserRegistration;

use App\UseCase\UserRegistration\UserRegistrationCommand;

class UserRegistrationDomain
{
    public function __construct(
        private readonly UserRegistrationCommand $command,
    ){
    }

    public function registerUser(UserRegistrationRequest $request): UserRegistrationResponse
    {
        return $this->command->execute($request);
    }
}
