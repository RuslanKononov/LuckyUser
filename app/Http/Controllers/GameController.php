<?php

namespace App\Http\Controllers;

use App\Domain\Game\GameDomain;
use App\Http\Controllers\Factory\GameFactory;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function __construct(
        private readonly GameDomain $domain,
        private readonly GameFactory $factory,
    ){
    }

    public function index(Request $request)
    {
        $gameResponse = $this->domain->play(
            $this->factory->createGameDomainRequest($request)
        );

        return redirect()->route('pageA', ['pageLink' => $request->pageLink])
            ->with(
                sprintf('gameWin:%s', $gameResponse->isWin ? 'WIN' : 'LOSE'),
                sprintf('%d: You %s. Your winning is %01.2f',
                    $gameResponse->spinResult,
                    $gameResponse->isWin ? 'WIN' : 'LOSE',
                    $gameResponse->winAmount,
                ),
            );
    }
}
