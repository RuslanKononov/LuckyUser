<?php

declare(strict_types=1);

namespace App\Query\GameHistory\Factory;

use App\DTO\GameHistory\UserGameDTO;
use App\DTO\GameHistory\UserGameHistoryDTO;
use App\Enum\Game\GameType;
use App\Models\UserGame;
use Illuminate\Database\Eloquent\Collection;

class GameHistoryQueryFactory
{
    public function createUserGameHistoryDTO(Collection $userGameHistory): UserGameHistoryDTO
    {
        $userGameHistoryDTO = new UserGameHistoryDTO();
        foreach ($userGameHistory as $userGame) {
            $userGameHistoryDTO->addUserGame($this->createUserGameDTO($userGame));
        }

        return $userGameHistoryDTO;
    }

    private function createUserGameDTO(UserGame $userGame): UserGameDTO
    {
        return new UserGameDTO(
            gameUuid: $userGame['uuid'],
            gameType: GameType::from($userGame['game_type']),
            spinResult: (json_decode($userGame['original_result']))->spinResult,
            isWin: $userGame['is_win'],
            winAmount: (float)$userGame['win_amount'],
        );
    }
}
