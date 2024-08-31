<?php

declare(strict_types=1);

namespace App\UseCase\GameHistory;

use App\Domain\GameHistory\GameHistoryRequest;
use App\Domain\GameHistory\GameHistoryResponse;
use App\UseCase\GameHistory\Factory\GameHistoryFactory;

class GameHistoryCommand
{
    public function __construct(
        private readonly GameHistoryQueryInterface $query,
        private readonly GameHistoryFactory $factory,
    ){
    }

    public function execute(GameHistoryRequest $request): GameHistoryResponse
    {
        $userGameHistoryDTO = $this->query->getUserGameHistory($request->userUuid);

        return $this->factory->makeGameHistoryResponse($userGameHistoryDTO);
    }
}
