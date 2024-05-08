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

    <div class="container vh-100 flex-column flex-center bg_opacity position-relative">
        <row class="row row-cols-3">
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/001.png" class="card-img-top" alt="{{ $pkmn_1_name }}">
                    <div class="card-body">
                      <h5 class="card-title text-capitalize">{{ $pkmn_1_name }}</h5>
                      <p class="card-text text-capitalize">{{ $pkmn_1_desc }}</p>
                      <ul>
                        <li><a href="https://www.pokemon.com/it/pokedex/{{ $pkmn_1_name }}" target="_blank">more info</a></li>
                      </ul>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/004.png" class="card-img-top" alt="{{ $pkmn_2_name }}">
                    <div class="card-body">
                      <h5 class="card-title text-capitalize">{{ $pkmn_2_name }}</h5>
                      <p class="card-text text-capitalize">{{ $pkmn_2_desc }}</p>
                      <ul>
                        <li><a href="https://www.pokemon.com/it/pokedex/{{ $pkmn_2_name }}" target="_blank">more info</a></li>
                      </ul>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center">
                <div class="card" style="width: 18rem;">
                    <img src="https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/007.png" class="card-img-top" alt="{{ $pkmn_3_name }}">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">{{ $pkmn_3_name }}</h5>
                        <p class="card-text text-capitalize">{{ $pkmn_3_desc }}</p>
                        <ul>
                          <li><a href="https://www.pokemon.com/it/pokedex/{{ $pkmn_3_name }}" target="_blank">more info</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </row>

        {{-- Easter Egg --}}
        <div class="div position-absolute top-50 end-0">
            <img src="{{ asset('css\img\wait-for.png') }}" alt="wait-for" style="max-width: 200px; filter: opacity(30%);">
        </div>
        <div class="div position-absolute image top-50 end-0">
            <img src="https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/302_f2.png" alt="sableye" style="max-width: 400px;">
        </div>
        {{-- /Easter Egg --}}
    </div>

    <footer class="bg-black fixed-bottom">
        <div class="text-white text-center py-2">
          Powered by <a href="https://github.com/luigidibella">ldb</a>
        </div>
    </footer>

</body>
</html>
