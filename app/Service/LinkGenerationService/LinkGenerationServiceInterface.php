<?php

declare(strict_types=1);

namespace App\Service\LinkGenerationService;

interface LinkGenerationServiceInterface
{
    public function generate(): string;
}
