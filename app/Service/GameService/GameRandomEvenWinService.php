<?php

declare(strict_types=1);

namespace App\Service\GameService;

use App\DTO\Game\GameResultDTO;
use App\Enum\Game\GameType;
use Symfony\Component\Uid\Uuid;

class GameRandomEvenWinService implements GameServiceInterface
{
    public function play(): GameResultDTO
    {
        $spinResult = $this->spin();

        $amountCalculation = 0;
        $isWin = $this->isWin($spinResult);
        if ($isWin) {
            $amountCalculation = $this->calculateWinAmount($spinResult);
        }

        return new GameResultDTO(
            gameUuid: Uuid::v6()->toRfc4122(),
            gameType: GameType::RandomEvenWin,
            originalResult: json_encode(['spinResult' => $spinResult]),
            spinResult: $spinResult,
            isWin: $isWin,
            winAmount: $amountCalculation,
        );
    }

    private function spin(): int
    {
        return random_int(
            config('games.randomWin.randomValues.min'),
            config('games.randomWin.randomValues.max')
        );
    }

    private function isWin(int $spinResult): bool
    {
        return $spinResult % 2 === 0;
    }

    private function calculateWinAmount(int $spinResult): float
    {
        foreach (config('games.randomWin.winPercent') as $percent => $range) {
            if ($spinResult >= $range[0] && $spinResult <= $range[1]) {
                return ($spinResult * $percent)/100;
            }
        }

        //@todo throw exception because of invalid configuration of the game
        //temporary solution
        return 0;
    }
}
