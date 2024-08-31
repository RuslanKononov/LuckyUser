<?php

declare(strict_types=1);

namespace App\UseCase\PageARegenerateLink\Factory;

use App\Domain\PageARegenerateLink\PageARegenerateLinkResponse;

class PageARegenerateLinkFactory
{
    public function makePageARegenerateLinkResponse(string $newPageLink): PageARegenerateLinkResponse
    {
        return new PageARegenerateLinkResponse($newPageLink);
    }
}
