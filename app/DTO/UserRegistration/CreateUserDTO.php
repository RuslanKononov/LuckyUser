<?php

declare(strict_types=1);

namespace App\DTO\UserRegistration;

class CreateUserDTO
{
    public function __construct(
        public readonly string $uuid,
        public readonly string $username,
        public readonly string $phoneNumber,
        public readonly string $pageLink,
    ){
    }
}
