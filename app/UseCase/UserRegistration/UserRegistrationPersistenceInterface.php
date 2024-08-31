<?php

declare(strict_types=1);

namespace App\UseCase\UserRegistration;

use App\DTO\UserRegistration\CreateUserDTO;

interface UserRegistrationPersistenceInterface
{
    public function persist(CreateUserDTO $createUserDTO): void;
}
