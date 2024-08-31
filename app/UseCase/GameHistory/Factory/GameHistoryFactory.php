<?php

declare(strict_types=1);

namespace App\UseCase\GameHistory\Factory;

use App\Domain\GameHistory\GameHistoryResponse;
use App\DTO\GameHistory\UserGameHistoryDTO;

class GameHistoryFactory
{
    public function makeGameHistoryResponse(UserGameHistoryDTO $userGameHistoryDTO): GameHistoryResponse
    {
        return new GameHistoryResponse($userGameHistoryDTO->getUserGames());
    }
}
