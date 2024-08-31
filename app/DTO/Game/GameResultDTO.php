<?php

declare(strict_types=1);

namespace App\DTO\Game;

use App\Enum\Game\GameType;

class GameResultDTO
{
    public function __construct(
        public readonly string $gameUuid,
        public readonly GameType $gameType,
        public readonly string $originalResult,
        public readonly int $spinResult,
        public readonly bool $isWin,
        public readonly float $winAmount,
    ){
    }
}
