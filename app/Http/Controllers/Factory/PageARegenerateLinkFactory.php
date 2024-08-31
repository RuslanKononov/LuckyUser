<?php

declare(strict_types=1);

namespace App\Http\Controllers\Factory;

use App\Domain\PageARegenerateLink\PageARegenerateLinkRequest;
use Illuminate\Http\Request;

class PageARegenerateLinkFactory
{
    public function createPageARegenerateLinkDomainRequest(Request $request): PageARegenerateLinkRequest
    {
        return new PageARegenerateLinkRequest($request->pageLink);
    }
}
