<?php

declare(strict_types=1);

namespace App\UseCase\Game\Factory;

use App\Domain\Game\GameResponse;
use App\DTO\Game\GameResultDTO;

class GameFactory
{
    public function makeGameResponse(GameResultDTO $gameResultDTO): GameResponse
    {
        return new GameResponse(
            spinResult: $gameResultDTO->spinResult,
            isWin: $gameResultDTO->isWin,
            winAmount: $gameResultDTO->winAmount,
        );
    }
}
