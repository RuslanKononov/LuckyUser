<?php

declare(strict_types=1);

namespace App\DTO\GameHistory;

class UserGameHistoryDTO
{
    private array $userGames = [];
    public function addUserGame(UserGameDTO $userGameDTO): void
    {
        $this->userGames[] = $userGameDTO;
    }

    /**
     * @return array | UserGameDTO[]
     */
    public function getUserGames(): array
    {
        return $this->userGames;
    }
}
