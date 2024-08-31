<?php

declare(strict_types=1);

namespace App\Service\GameService;

use App\DTO\Game\GameResultDTO;

interface GameServiceInterface
{
    public function play(): GameResultDTO;
}
