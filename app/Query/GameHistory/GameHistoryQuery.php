<?php

declare(strict_types=1);

namespace App\Query\GameHistory;

use App\DTO\GameHistory\UserGameHistoryDTO;
use App\Query\GameHistory\Factory\GameHistoryQueryFactory;
use App\Repository\UserGameRepository;
use App\UseCase\GameHistory\GameHistoryQueryInterface;

class GameHistoryQuery implements GameHistoryQueryInterface
{
    public function __construct(
        private readonly UserGameRepository $userGameRepository,
        private readonly GameHistoryQueryFactory $factory,
    ){
    }

    public function getUserGameHistory(string $userUuid): UserGameHistoryDTO
    {
        $result = $this->userGameRepository->getUserGameHistory($userUuid);

        return $this->factory->createUserGameHistoryDTO($result);
    }
}
