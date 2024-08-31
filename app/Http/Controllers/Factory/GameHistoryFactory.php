<?php

declare(strict_types=1);

namespace App\Http\Controllers\Factory;

use App\Domain\GameHistory\GameHistoryRequest;

class GameHistoryFactory
{
    public function createGameHistoryDomainRequest($request): GameHistoryRequest
    {
        return new GameHistoryRequest($request->get('userUuid'));
    }
}
