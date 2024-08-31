<?php

declare(strict_types=1);

namespace App\Domain\PageARegenerateLink;

class PageARegenerateLinkRequest
{
    public function __construct(
        public readonly string $pageLink,
    ){
    }
}
