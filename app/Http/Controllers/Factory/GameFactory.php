<?php

declare(strict_types=1);

namespace App\Http\Controllers\Factory;

use App\Domain\Game\GameRequest;

class GameFactory
{
    public function createGameDomainRequest($request): GameRequest
    {
        return new GameRequest($request->get('userUuid'));
    }
}
