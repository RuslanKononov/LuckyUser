<?php

declare(strict_types=1);

namespace App\Http\Controllers\Factory;

use App\Domain\PageADeactivateLink\PageADeactivateLinkRequest;
use Illuminate\Http\Request;

class PageADeactivateLinkFactory
{
    public function createPageADeactivateLinkDomainRequest(Request $request): PageADeactivateLinkRequest
    {
        return new PageADeactivateLinkRequest($request->pageLink);
    }
}
