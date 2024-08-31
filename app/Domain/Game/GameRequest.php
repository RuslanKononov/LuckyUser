<?php

declare(strict_types=1);

namespace App\Domain\Game;

class GameRequest
{
    public function __construct(
        public readonly string $userUuid,
    ){
    }
}
