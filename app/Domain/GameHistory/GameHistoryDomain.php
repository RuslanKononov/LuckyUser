<?php

declare(strict_types=1);

namespace App\Domain\GameHistory;

use App\UseCase\GameHistory\GameHistoryCommand;

class GameHistoryDomain
{
    public function __construct(
        private readonly GameHistoryCommand $command,
    ) {
    }

    public function execute(GameHistoryRequest $request): GameHistoryResponse
    {
        return $this->command->execute($request);
    }
}
