<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Hello Laravel</title>
</head>
<body>
    <nav class="navbar fixed-top bg-body-tertiary border-bottom">
        <div class="container-fluid d-flex justify-content-start">
            <a class="navbar-brand" href="#">Hello Laravel</a>
            <a class="btn btn-danger" href="{{ route('home') }}">Home</a>
        </div>
    </nav>

    <div class="container vh-100 flex-column flex-center bg_opacity">
        <row class="row row-cols-3">
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/001.png" class="card-img-top" alt="bulbasaur">
                    <div class="card-body">
                      <h5 class="card-title">Bulbasaur</h5>
                      <p class="card-text">Pokémon Seed</p>
                      <ul>
                        <li><a href="https://www.pokemon.com/it/pokedex/bulbasaur" target="_blank">more info</a></li>
                      </ul>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/004.png" class="card-img-top" alt="charmander">
                    <div class="card-body">
                      <h5 class="card-title">Charmander</h5>
                      <p class="card-text">Pokémon Lizard</p>
                      <ul>
                        <li><a href="https://www.pokemon.com/it/pokedex/charmander" target="_blank">more info</a></li>
                      </ul>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/007.png" class="card-img-top" alt="squirtle">
                    <div class="card-body">
                      <h5 class="card-title">Squirtle</h5>
                      <p class="card-text">Pokémon Tiny Turtle</p>
                      <ul>
                        <li><a href="https://www.pokemon.com/it/pokedex/squirtle" target="_blank">more info</a></li>
                      </ul>
                    </div>
                </div>
            </div>
        </row>
    </div>

    <footer class="bg-black fixed-bottom">
        <div class="text-white text-center py-2">
          Powered by <a href="https://github.com/luigidibella">ldb</a>
        </div>
    </footer>

</body>
</html>
