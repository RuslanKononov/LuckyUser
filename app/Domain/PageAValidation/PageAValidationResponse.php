<?php

declare(strict_types=1);

namespace App\Domain\PageAValidation;

class PageAValidationResponse
{
    public function __construct(
        public readonly string $pageLink,
        public readonly string $userUuid,
        public readonly string $validUntil,
    ){
    }
}
