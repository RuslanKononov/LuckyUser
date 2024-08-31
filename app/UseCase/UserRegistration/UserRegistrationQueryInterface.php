<?php

declare(strict_types=1);

namespace App\UseCase\UserRegistration;

use App\DTO\UserRegistration\UserDTO;

interface UserRegistrationQueryInterface
{
    public function getUserDTO(string $userUuid): UserDTO;
}
