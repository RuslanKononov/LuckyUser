<?php

declare(strict_types=1);

namespace App\Persistence\UserRegistration;

use App\DTO\UserRegistration\CreateUserDTO;
use App\Repository\UserRepository;
use App\UseCase\UserRegistration\UserRegistrationPersistenceInterface;

class UserRegistrationPersistence implements UserRegistrationPersistenceInterface
{
    public function __construct(
        private readonly UserRepository $userRepository,
    ){
    }

    public function persist(CreateUserDTO $createUserDTO): void
    {
        $this->userRepository->createUser($createUserDTO);
    }
}
