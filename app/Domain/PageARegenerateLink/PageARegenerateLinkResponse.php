<?php

declare(strict_types=1);

namespace App\Domain\PageARegenerateLink;

class PageARegenerateLinkResponse
{
    public function __construct(
        public readonly string $newPageLink,
    ){
    }
}
