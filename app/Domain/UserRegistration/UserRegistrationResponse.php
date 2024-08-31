<?php

declare(strict_types=1);

namespace App\Domain\UserRegistration;

class UserRegistrationResponse
{
    public function __construct(
        public readonly string $userUuid,
        public readonly string $pageLink,
    ){
    }
}
