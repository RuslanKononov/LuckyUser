<?php

declare(strict_types=1);

namespace App\Domain\UserRegistration;

class UserRegistrationRequest
{
    public function __construct(
        public readonly string $uuid,
        public readonly string $userName,
        public readonly string $phoneNumber,
    ){
    }
}
