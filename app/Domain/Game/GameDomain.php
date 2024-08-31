<?php

declare(strict_types=1);

namespace App\Domain\Game;

use App\UseCase\Game\GameCommand;

class GameDomain
{
    public function __construct(
        private readonly GameCommand $command,
    ) {
    }

    public function play(GameRequest $request): GameResponse
    {
        return $this->command->execute($request);
    }
}
