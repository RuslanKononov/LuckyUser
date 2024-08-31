<?php

declare(strict_types=1);

namespace App\DTO\PageAValidation;

class UserDTO
{
    public function __construct(
        public readonly string $pageLink,
        public readonly string $userUuid,
        public readonly string $validUntil,
    ){
    }
}
