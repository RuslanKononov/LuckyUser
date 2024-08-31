<?php

declare(strict_types=1);

namespace App\Query\PageAValidation\Factory;

use App\DTO\PageAValidation\UserDTO;
use App\Models\UserPage;

class PageAValidationQueryFactory
{
    public function makeUserDTOFromUserPage(UserPage $userPage): UserDTO
    {
        return new UserDTO(
            pageLink: $userPage->link,
            userUuid: $userPage->user_uuid,
            validUntil: $userPage->valid_until,
        );
    }
}
