<?php

declare(strict_types=1);

namespace App\Domain\GameHistory;

class GameHistoryRequest
{
    public function __construct(
        public readonly string $userUuid,
    ){
    }
}
