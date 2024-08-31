<?php

declare(strict_types=1);

namespace App\Http\Middleware\Factory;

use App\Domain\PageAValidation\PageAValidationRequest;
use Illuminate\Http\Request;

class PageAValidationMiddlewareFactory
{
    public function createPageAValidationDomainRequest(Request $request): PageAValidationRequest
    {
        return new PageAValidationRequest(
            pageLink: $request->pageLink,
        );
    }
}
