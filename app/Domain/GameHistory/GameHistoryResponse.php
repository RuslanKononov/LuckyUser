<?php

declare(strict_types=1);

namespace App\Domain\GameHistory;

use App\DTO\GameHistory\UserGameDTO;

class GameHistoryResponse
{
    public function __construct(
        /** array | UserGameDTO[] */
        public readonly array $userGames,
    ){
    }
}
