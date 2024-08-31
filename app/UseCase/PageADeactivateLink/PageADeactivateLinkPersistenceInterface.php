<?php

declare(strict_types=1);

namespace App\UseCase\PageADeactivateLink;

interface PageADeactivateLinkPersistenceInterface
{
    public function deactivate(string $pageLink): void;
}
