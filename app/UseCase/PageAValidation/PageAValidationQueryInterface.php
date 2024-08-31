<?php

declare(strict_types=1);

namespace App\UseCase\PageAValidation;

use App\DTO\PageAValidation\UserDTO;

interface PageAValidationQueryInterface
{
    public function getValidUserDTOByPageLink(string $pageLink): UserDTO;
}
