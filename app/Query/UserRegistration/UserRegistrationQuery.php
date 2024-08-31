<?php

declare(strict_types=1);

namespace App\Query\UserRegistration;

use App\DTO\UserRegistration\UserDTO;
use App\Query\UserRegistration\Factory\UserRegistrationQueryFactory;
use App\Repository\UserRepository;
use App\UseCase\UserRegistration\UserRegistrationQueryInterface;

class UserRegistrationQuery implements UserRegistrationQueryInterface
{
    public function __construct(
        private readonly UserRepository $userRepository,
        private readonly UserRegistrationQueryFactory $factory,
    ){
    }

    public function getUserDTO(string $userUuid): UserDTO
    {
        return $this->factory->makeUserDTOFromUser($this->userRepository->getUserByUserUuid($userUuid));
    }
}
