<?php

declare(strict_types=1);

namespace App\Service\LinkGenerationService;

class LinkRandomGenerationService implements LinkGenerationServiceInterface
{
    public function generate(): string
    {
        return bin2hex(random_bytes(16));
    }
}
