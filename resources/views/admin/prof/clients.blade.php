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
    <title>Clients</title>
</head>

<body>

    <div class="wrapper">
        <aside id="sidebar">
            @include('layout.asidebar')
        </aside>
        <div class="main">
            <header>
                @include('layout.header')
            </header>
            <div class="container my-5">
                <div class="client-top d-flex align-items-center justify-content-between">
                    <form action="">
                        <div class="form-group search-form">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" class="form-control" placeholder="Rechercher">
                        </div>
                    </form>
                    <a href="{{route("ajouterclient")}}" class="button">Ajouter un Client</a>
                </div>
                <div class="content">
                    <div class="table-responsive py-1 px-3">
                        <table class="table align-middle ">
                            <thead>
                                <tr>
                                    <th>CLIENT</th>
                                    <th class="text-center">FACTURE D'ACHAT</th>
                                    <th class="text-center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center info">
                                            <img src="{{ asset('assets/img/avatar.png') }}" alt="Avatar" class="avatar me-3">
                                            <div>
                                                <a href="{{route('detailclient')}}">Mohamed Test</a><br>
                                                <span>mohamedtest@gmail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge">0</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="" class="btn-action edite"><i class="fas fa-edit"></i></a>
                                        <a href="" class="btn-action"><i class="fas fa-trash text-danger"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
