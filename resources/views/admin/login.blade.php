<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <title>Se connecter</title>
</head>

<body>

    <div class="container">
        <div class="form-login">
            <div class="text-center pb-4">
                <img src="{{ asset('assets/img/logo.png') }}" alt="">
            </div>
            <form action="{{ route('loginpost') }}" method="post">
                @csrf
                <h5>Bienvenue ! Admin.</h5>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @error('email')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="form-group py-3">
                    <label for="" class="form-label">Email:</label>
                    <input type="text" placeholder="Email" class="form-control" name="email">
                </div>
                <div class="form-group py-3">
                    <label for="" class="form-label">Password:</label>
                    <div class="input-group">
                        <input type="password" id="password" placeholder="Mot de passe" name="password"
                            class="form-control">
                        <button type="button" class="button" onclick="togglePassword()">
                            <i class="fa fa-eye"></i>
                        </button>
                    </div>
                </div>
                <div class="form-group py-3">
                    <input type="submit" class="export" value="Se Connecter">
                </div>
            </form>
        </div>
    </div>


    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
        function togglePassword() {
            let passwordInput = document.getElementById("password");
            let icon = document.querySelector(".btn-secondary i");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
