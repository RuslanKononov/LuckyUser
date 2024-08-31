<?php

declare(strict_types=1);

namespace App\UseCase\PageARegenerateLink;

interface PageARegenerateLinkPersistenceInterface
{
    public function update(string $pageLink, string $newPageLink): void;
}
