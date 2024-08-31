<?php

declare(strict_types=1);

namespace App\Domain\PageAValidation;

use App\UseCase\PageAValidation\PageAValidationCommand;

class PageAValidationDomain
{
    public function __construct(
        private readonly PageAValidationCommand $command,
    ){
    }

    public function validate(PageAValidationRequest $request): PageAValidationResponse
    {
        return $this->command->execute($request);
    }
}
