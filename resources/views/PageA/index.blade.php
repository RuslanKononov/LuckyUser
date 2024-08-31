<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if (session('gameWin:WIN'))
    <div class="alert alert-success text-center">
        {{ session('gameWin:WIN') }}
    </div>
@endif

@if (session('gameWin:LOSE'))
    <div class="alert alert-danger text-center">
        {{ session('gameWin:LOSE') }}
    </div>
@endif

<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h3 class="card-header text-center">Page A</h3>
                    <div class="card-body">
                        <div class="text-center" style="background-color: #cbd5e0;">
                            Link valid until: {{ $validUntil }} <br>
                            Current page link: {{ $pageLink }}
                            <form id="regenerate-link-form"
                                  action="{{ route('pageA.RegenerateLink', ['pageLink' => $pageLink]) }}"
                                  method="POST">
                                @csrf
                                <button id="regenerate-link" >Regenerate link</button>
                            </form>
                        </div>
                        <div class="text-center" style="background-color: #5c2442">
                            <form id="regenerate-link-form"
                                  action="{{ route('pageA.DeactivateLink', ['pageLink' => $pageLink]) }}"
                                  method="POST">
                                @csrf
                                <button id="deactivate-link">Deactivate link</button>
                            </form>
                        </div>
                        <div class="text-center" style="background-color: #209a16">
                            <form id="imfeelinglucky-form"
                                  action="{{ route('game.index', ['pageLink' => $pageLink]) }}"
                                  method="POST">
                                @csrf
                                <button id="imfeelinglucky" >Imfeelinglucky</button>
                            </form>
                        </div>
                        <div class="text-center" style="background-color: #206696">
                            <button id="history" onclick="window.location='{{ route('game.history', ['pageLink' => $pageLink]) }}'">History</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
