<?php

declare(strict_types=1);

namespace App\Repository;

use App\DTO\Game\GameResultDTO;
use App\Models\UserGame;
use Illuminate\Database\Eloquent\Collection;

class UserGameRepository
{
    public function saveGameResult(string $userUuid, GameResultDTO $gameResultDTO): void
    {
        $userGame = new UserGame();

        $userGame->uuid = $gameResultDTO->gameUuid;
        $userGame->user_uuid = $userUuid;
        $userGame->game_type = $gameResultDTO->gameType->value;
        $userGame->original_result  = $gameResultDTO->originalResult;
        $userGame->is_win = $gameResultDTO->isWin;
        $userGame->win_amount  = $gameResultDTO->winAmount;

        $userGame->save();
    }

    public function getUserGameHistory(string $userUuid): Collection
    {
        return UserGame::where([
            ['user_uuid', '=', $userUuid],
        ])->orderBy('uuid', 'desc')->limit(3)->get();
    }
}
