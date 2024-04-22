<!DOCTYPE html>
<html lang="id">

<head>

    <title>Web Portofolio Dimas SA</title>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Dimas Sirajuddin Arafa.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/portofolio">Portofolio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid border border-warning"></div>
    <br>
    </br>


    {{-- Article Container --}}
    <div class="container bg-dark bg-opacity-10 text-center border border-black px-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <h1>Tic Tac Toe 5x5 Games</h1>
                <div class="text-start fs-5" style="font-family: Georgia, serif">
                    Tic Tac Toe adalah game sederhana yang dimainkan oleh 2 orang. Dimana semestinya game ini berdimensi 3x3 namun, saya dan tim membuatnya menjadi 5x5 untuk final project pada semester 3 perkuliahan.
                    Kalian bisa coba game kami <a href="https://github.com/dimassa666/TicTacToe">Disini</a>
                </div>
            </div>
            <div class="col-4 ">
                <br>
                </br>
                <img src="assets/TicTacToe.png" alt="tictactoe" style="width: 80%" class="rounded border border-black">
                <br>
                </br>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
