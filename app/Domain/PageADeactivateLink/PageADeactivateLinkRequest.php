<?php

declare(strict_types=1);

namespace App\Domain\PageADeactivateLink;

class PageADeactivateLinkRequest
{
    public function __construct(
        public readonly string $pageLink,
    ){
    }
}
