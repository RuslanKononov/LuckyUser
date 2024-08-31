<?php

namespace App\Http\Controllers;

use App\Domain\GameHistory\GameHistoryDomain;
use App\Http\Controllers\Factory\GameHistoryFactory;
use Illuminate\Http\Request;

class GameHistoryController extends Controller
{
    public function __construct(
        private readonly GameHistoryDomain $domain,
        private readonly GameHistoryFactory $factory,
    ){
    }

    public function index(Request $request)
    {
        $gameHistoryResponse = $this->domain->execute(
            $this->factory->createGameHistoryDomainRequest($request)
        );

        return view('game.history', [
            'pageLink' => $request->get('pageLink'),
            'gameHistory' => $gameHistoryResponse->userGames,
        ]);
    }
}
