<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h3 class="card-header text-center">Game History</h3>
                    <div class="card-body">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>Game</th>
                                    <th>Spin Result</th>
                                    <th>Result</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($gameHistory as $game)
                                <tr>
                                    <td>{{ $game->gameType }}</td>
                                    <td>{{ $game->spinResult }}</td>
                                    <td>{{ $game->isWin ? 'WIN' : 'LOSE' }}</td>
                                    <td>{{ $game->winAmount }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>


                        <div class="text-center" style="background-color: #206696">
                            <button id="pageA" onclick="window.location='{{ route('pageA', ['pageLink' => $pageLink]) }}'">
                                Back to Page A
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
