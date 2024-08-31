<?php

declare(strict_types=1);

namespace App\UseCase\Game;

use App\Domain\Game\GameRequest;
use App\Domain\Game\GameResponse;
use App\Service\GameService\GameServiceInterface;
use App\UseCase\Game\Factory\GameFactory;

class GameCommand
{
    public function __construct(
        private readonly GamePersistenceInterface $persistence,
        private readonly GameFactory $factory,
        private readonly GameServiceInterface $gameService,
    ){
    }

    public function execute(GameRequest $request): GameResponse
    {
        $gameResultDTO = $this->gameService->play();

        $this->persistence->persist($request->userUuid, $gameResultDTO);

        return $this->factory->makeGameResponse($gameResultDTO);
    }
}
