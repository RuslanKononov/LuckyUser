<?php

declare(strict_types=1);

namespace App\UseCase\Game;

use App\DTO\Game\GameResultDTO;

interface GamePersistenceInterface
{
    public function persist(string $userUuid, GameResultDTO $gameResultDTO): void;
}
