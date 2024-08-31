<?php

declare(strict_types=1);

namespace App\Domain\PageADeactivateLink;

use App\UseCase\PageADeactivateLink\PageADeactivateLinkCommand;

class PageADeactivateLinkDomain
{
    public function __construct(
        private readonly PageADeactivateLinkCommand $command,
    ) {
    }

    public function deactivateLink(PageADeactivateLinkRequest $request): void
    {
        $this->command->execute($request);
    }
}
