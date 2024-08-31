<?php

declare(strict_types=1);

namespace App\UseCase\PageAValidation\Factory;

use App\Domain\PageAValidation\PageAValidationResponse;
use App\DTO\PageAValidation\UserDTO;

class PageAValidationFactory
{
    public function fromDTOToResponse(UserDTO $userDTO): PageAValidationResponse
    {
        return new PageAValidationResponse(
            pageLink: $userDTO->pageLink,
            userUuid: $userDTO->userUuid,
            validUntil: $userDTO->validUntil,
        );
    }
}
