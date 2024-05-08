<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.css' integrity='sha512-VcyUgkobcyhqQl74HS1TcTMnLEfdfX6BbjhH8ZBjFU9YTwHwtoRtWSGzhpDVEJqtMlvLM2z3JIixUOu63PNCYQ==' crossorigin='anonymous'/>
    <title>Hello Laravel</title>
</head>
<body>
    <nav class="navbar fixed-top bg-body-tertiary border-bottom">
        <div class="container-fluid d-flex justify-content-start">
            <a class="navbar-brand" href="#">Hello Laravel</a>
            <a class="btn btn-success" href="/get-started">Get Started</a>
        </div>
    </nav>

    <div class="container my-5 py-5 text-center">
        <h1>Home</h1>

        <h3>Hello <span class="text-primary">{{ $name . ' ' . $lastname }}</span>, this is your team!</h3>

        <div class="container my-5">
            <div class="row row-cols-3">
                <div class="col">
                    <img src="https://lorempokemon.fakerapi.it/pokemon/200/1" alt="pkmn1" style="max-width: 250px;">
                </div>

                <div class="col">
                    <img src="https://lorempokemon.fakerapi.it/pokemon/200/2" alt="pkmn2" style="max-width: 250px;">
                </div>


                <div class="col">
                    <img src="https://lorempokemon.fakerapi.it/pokemon/200/3" alt="pkmn3" style="max-width: 250px;">
                </div>

                <div class="col">
                    <img src="https://lorempokemon.fakerapi.it/pokemon/200/4" alt="pkmn4" style="max-width: 250px;">
                </div>

                <div class="col">
                    <img src="https://lorempokemon.fakerapi.it/pokemon/200/5" alt="pkmn5" style="max-width: 250px;">
                </div>

                <div class="col">
                    <img src="https://lorempokemon.fakerapi.it/pokemon/200/6" alt="pkmn6" style="max-width: 250px;">
                </div>
            </div>
        </div>

        <a class="btn btn-primary" href="/">Change Team</a>

    </div>

    <footer class="bg-black fixed-bottom">
        <div class="text-white text-center py-2">
          Powered by <a href="https://github.com/luigidibella">ldb</a>
        </div>
    </footer>

</body>
</html>
