<?php

declare(strict_types=1);

namespace App\Domain\PageARegenerateLink;

use App\UseCase\PageARegenerateLink\PageARegenerateLinkCommand;

class PageARegenerateLinkDomain
{
    public function __construct(
        private readonly PageARegenerateLinkCommand $command,
    ) {
    }

    public function regenerate(PageARegenerateLinkRequest $request): PageARegenerateLinkResponse
    {
        return $this->command->execute($request);
    }
}
