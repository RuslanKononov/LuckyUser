<?php

declare(strict_types=1);

namespace App\UseCase\GameHistory;

use App\DTO\GameHistory\UserGameHistoryDTO;

interface GameHistoryQueryInterface
{
    public function getUserGameHistory(string $userUuid): UserGameHistoryDTO;
}
