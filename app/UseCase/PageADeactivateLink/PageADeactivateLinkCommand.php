<?php

declare(strict_types=1);

namespace App\UseCase\PageADeactivateLink;

use App\Domain\PageADeactivateLink\PageADeactivateLinkRequest;

class PageADeactivateLinkCommand
{
    public function __construct(
        private readonly PageADeactivateLinkPersistenceInterface $persistence,
    ){
    }

    public function execute(PageADeactivateLinkRequest $request): void
    {
        $this->persistence->deactivate($request->pageLink);
    }
}
