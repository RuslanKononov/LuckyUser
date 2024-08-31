<?php

declare(strict_types=1);

namespace App\DTO\GameHistory;

use App\Enum\Game\GameType;

class UserGameDTO
{
    public function __construct(
        public readonly string $gameUuid,
        public readonly GameType $gameType,
        public readonly int $spinResult,
        public readonly bool $isWin,
        public readonly float $winAmount,
    ){
    }
}
