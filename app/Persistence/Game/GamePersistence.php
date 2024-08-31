<?php

declare(strict_types=1);

namespace App\Persistence\Game;

use App\DTO\Game\GameResultDTO;
use App\Repository\UserGameRepository;
use App\UseCase\Game\GamePersistenceInterface;

class GamePersistence implements GamePersistenceInterface
{
    public function __construct(
        private readonly UserGameRepository $userGameRepository,
    ){
    }

    public function persist(string $userUuid, GameResultDTO $gameResultDTO): void
    {
        $this->userGameRepository->saveGameResult($userUuid, $gameResultDTO);
    }
}
