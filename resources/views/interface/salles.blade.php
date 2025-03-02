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
    <title>Salles</title>
</head>

<body>
    <div>
        <a href="{{ route('prof_logout') }}" id="logout" class="prof_logout"><i
                class="fa-solid fa-right-from-bracket"></i><span>Se
                déconnecter</span></a>
    </div>
    <div class="container py-5">
        <h4 class="text-center">Liste des salles disponible</h4>
        <div class="row my-5 salle-liste">
            @foreach ($salles as $salle)
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="salle d-flex align-items-center justify-content-between">
                        <div class="left">
                            <h6>{{ $salle->name }}</h6>
                            <p>Capacité : {{ $salle->ability }}</p>
                        </div>
                        <div class="right d-flex align-items-center ">
                            <a href="{{ route('salle', ['id' => $salle->id]) }}" class="button">
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        document.querySelectorAll('.prof_logout').forEach(function(element) {
            element.addEventListener("click", function(event) {
                if (!confirm("Êtes-vous sûr de déconnecter")) {
                    event.preventDefault();
                }
            });
        });
    </script>


</body>

</html>
