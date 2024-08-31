<?php

declare(strict_types=1);

namespace App\Domain\Game;

class GameResponse
{
    public function __construct(
        public readonly int $spinResult,
        public readonly bool $isWin,
        public readonly float $winAmount,
    ){
    }
}
