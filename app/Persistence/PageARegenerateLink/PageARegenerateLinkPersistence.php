<?php

declare(strict_types=1);

namespace App\Persistence\PageARegenerateLink;

use App\Repository\UserPageRepository;
use App\UseCase\PageARegenerateLink\PageARegenerateLinkPersistenceInterface;

class PageARegenerateLinkPersistence implements PageARegenerateLinkPersistenceInterface
{
    public function __construct(
        private readonly UserPageRepository $repository,
    ){
    }

    public function update(string $pageLink, string $newPageLink): void
    {
        $this->repository->setNewPageLink($pageLink, $newPageLink);
    }
}
