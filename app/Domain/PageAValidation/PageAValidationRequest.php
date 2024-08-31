<?php

declare(strict_types=1);

namespace App\Domain\PageAValidation;

class PageAValidationRequest
{
    public function __construct(
        public readonly string $pageLink,
    ){
    }
}
