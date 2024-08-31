<?php

declare(strict_types=1);

namespace App\UseCase\UserRegistration\Factory;

use App\Domain\UserRegistration\UserRegistrationRequest;
use App\Domain\UserRegistration\UserRegistrationResponse;
use App\DTO\UserRegistration\CreateUserDTO;
use App\DTO\UserRegistration\UserDTO;

class RegisterUserFactory
{
    public function makeCreateUserDTO(
        UserRegistrationRequest $userRegistrationRequest,
        string $pageLink,
    ): CreateUserDTO {
        return new CreateUserDTO(
            uuid:        $userRegistrationRequest->uuid,
            username:    $userRegistrationRequest->userName,
            phoneNumber: $userRegistrationRequest->phoneNumber,
            pageLink:    $pageLink,
        );
    }

    public function makeUserRegistrationResponse(UserDTO $userDTO): UserRegistrationResponse
    {
        return new UserRegistrationResponse(
            userUuid: $userDTO->uuid,
            pageLink: $userDTO->pageLink,
        );
    }
}
