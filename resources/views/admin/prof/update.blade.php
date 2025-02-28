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
    <title>Modifié Professeur</title>
</head>

<body>

    <div class="wrapper">
        <aside id="sidebar">
            @include('admin.layout.asidebar')
        </aside>
        <div class="main">
            <div class="container my-5">
                <div class="content">
                    @if (session('success') && session('mailto'))
                        <div class="alert alert-success">
                            <p>{{ session('success') }}</p>
                            <p>
                                <a href="{{ session('mailto') }}" class="export">
                                    📧 Envoyer un mail au professeur
                                </a>
                            </p>
                        </div>
                    @endif
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <form action="{{ route('upprofpost') }}" method="post" class="py-3 px-3">
                        @csrf
                        <h5 class="text-center">Modifié un Professeur</h5>

                        <div class="row">
                            <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">Nom Complet:</label>
                                <input type="text" class="form-control" placeholder="Nom Complet" name="name"
                                    value="{{ $prof->name }}" required>
                            </div>
                            <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">E-mail:</label>
                                <input type="email" class="form-control" placeholder="E-mail" name="email"
                                    value="{{ $prof->email }}" required>
                            </div>
                            <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">Numéro de contact:</label>
                                <input type="number" class="form-control" placeholder="06000000000" name="phone_number"
                                    value="{{ $prof->phone_number }}" required>
                            </div>
                            <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                                <label for="password" class="form-label">Mot de passe :</label>
                                <div class="input-group">
                                    <input type="text" id="password" class="form-control" placeholder="Mot de passe"
                                        name="password" required>
                                    <button type="button" class="export" onclick="generatePassword()">Générer</button>
                                    <button type="button" class="button" onclick="togglePassword()">
                                        <i class="fa fa-eye"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="col-12 text-end">
                                <input type="hidden" name="id" value="{{ $prof->id }}">
                                <input type="submit" value="Enregistrer" class="button">
                                <a href="{{ route('profliste') }}" class="reset">Annuler</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        function generatePassword() {
            let charset = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*";
            let passwordLength = 12;
            let password = "";
            for (let i = 0; i < passwordLength; i++) {
                let randomIndex = Math.floor(Math.random() * charset.length);
                password += charset[randomIndex];
            }
            document.getElementById("password").value = password;
        }

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

        function copyText(elementId) {
            let text = document.getElementById(elementId).innerText;
            navigator.clipboard.writeText(text).then(() => {
                alert("Copié !");
            });
        }
    </script>

</body>

</html>
