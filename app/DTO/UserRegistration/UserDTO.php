<?php

declare(strict_types=1);

namespace App\DTO\UserRegistration;

class UserDTO
{
    public function __construct(
        public readonly string $uuid,
        public readonly string $pageLink,
    ){
    }
}
