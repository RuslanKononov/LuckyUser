<?php

declare(strict_types=1);

namespace App\Query\UserRegistration\Factory;

use App\DTO\UserRegistration\UserDTO;
use App\Models\User;

class UserRegistrationQueryFactory
{
    public function makeUserDTOFromUser(User $user): UserDTO
    {
        return new UserDTO(
            uuid: $user->uuid,
            pageLink: $user->page->link,
        );
    }
}
