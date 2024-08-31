<?php

declare(strict_types=1);

namespace App\UseCase\PageARegenerateLink;

use App\Domain\PageARegenerateLink\PageARegenerateLinkRequest;
use App\Domain\PageARegenerateLink\PageARegenerateLinkResponse;
use App\Service\LinkGenerationService\LinkGenerationServiceInterface;
use App\UseCase\PageARegenerateLink\Factory\PageARegenerateLinkFactory;

class PageARegenerateLinkCommand
{
    public function __construct(
        private readonly PageARegenerateLinkPersistenceInterface $persistence,
        private readonly PageARegenerateLinkFactory $factory,
        private readonly LinkGenerationServiceInterface $linkGenerationService,
    ){
    }

    public function execute(PageARegenerateLinkRequest $request): PageARegenerateLinkResponse
    {
        $newPageLink = $this->linkGenerationService->generate();

        $this->persistence->update($request->pageLink, $newPageLink);

        return $this->factory->makePageARegenerateLinkResponse($newPageLink);
    }
}
