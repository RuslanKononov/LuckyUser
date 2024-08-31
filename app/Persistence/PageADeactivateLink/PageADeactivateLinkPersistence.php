<?php

declare(strict_types=1);

namespace App\Persistence\PageADeactivateLink;

use App\Repository\UserPageRepository;
use App\UseCase\PageADeactivateLink\PageADeactivateLinkPersistenceInterface;
use App\UseCase\PageARegenerateLink\PageARegenerateLinkPersistenceInterface;

class PageADeactivateLinkPersistence implements PageADeactivateLinkPersistenceInterface
{
    public function __construct(
        private readonly UserPageRepository $repository,
    ){
    }

    public function deactivate(string $pageLink): void
    {
        $this->repository->deactivateLink($pageLink);
    }
}
