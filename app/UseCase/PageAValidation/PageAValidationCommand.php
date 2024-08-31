<?php

declare(strict_types=1);

namespace App\UseCase\PageAValidation;

use App\Domain\PageAValidation\PageAValidationRequest;
use App\Domain\PageAValidation\PageAValidationResponse;
use App\UseCase\PageAValidation\Exception\PageAValidationException;
use App\UseCase\PageAValidation\Factory\PageAValidationFactory;

class PageAValidationCommand
{
    public function __construct(
        private readonly PageAValidationQueryInterface $query,
        private readonly PageAValidationFactory $factory,
    ){
    }

    public function execute(PageAValidationRequest $request): PageAValidationResponse
    {
        try {
            return $this->factory->fromDTOToResponse(
                $this->query->getValidUserDTOByPageLink($request->pageLink)
            );
        } catch (\Throwable $e) {
            throw new PageAValidationException(sprintf('Validation failed: %s', $e->getMessage()));
        }
    }
}
