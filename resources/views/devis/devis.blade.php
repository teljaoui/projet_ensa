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
    <title>Devis</title>
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
                            <input type="search" class="form-control" placeholder="Rechercher">
                        </div>
                    </form>
                    <div class="d-flex  gap-10">
                        <div class="dropdown">
                            <button class="button dropdown-toggle" style="padding: 5px 10px !important; font-size: 17px;" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-filter"></i>
                            </button>
                            <ul class="dropdown-menu my-2">
                                <li><a class="dropdown-item" href="#"><span>All</span></a></li>
                                <li><a class="dropdown-item" href="#"><span>Brouillon</span></a></li>
                                <li><a class="dropdown-item" href="#"><span>Converted</span></a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="export dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Exporter</button>
                            <ul class="dropdown-menu my-2">
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-excel"></i><span>Exportation Excel</span></a></li>
                                <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-pdf"></i><span>Exportation pdf</span></a></li>
                            </ul>
                        </div>
                        <a href="{{route("ajouterdevis")}}" class="button">Nouvelle cotation</a>
                    </div>
                </div>
                <div class="content">
                    <div class="table-responsive py-1 px-3">
                        <table class="table align-middle ">
                            <thead>
                                <tr>
                                    <th>CLIENT</th>
                                    <th class="text-center">Date du devis</th>
                                    <th class="text-center">Date d'échéance</th>
                                    <th class="text-center">Montant</th>
                                    <th class="text-center">Statut</th>
                                    <th class="text-center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center info">
                                            <img src="{{ asset('assets/img/avatar.png') }}" alt="Avatar" class="avatar me-3">
                                            <div>
                                                <a href="{{route('detailclient')}}">Mohamed Test</a>
                                                <a href=""><span class="badge-info mx-2">#de874</span></a>
                                                <br>
                                                <span>mohamedtest@gmail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span>2025.02.06</span>
                                    </td>
                                    <td class="text-center">
                                        <span>2025.02.06</span>
                                    </td>
                                    <td class="text-center">
                                        <span>22.00</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge-success">Converted</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <button class="drop-table dropdown-toggle" type="button" data-bs-toggle="dropdown"  aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu my-2">
                                                <li><a class="dropdown-item" href="#"><span>Convertire en facture</span></a></li>
                                                <li><a class="dropdown-item" href="#"><span>Edit</span></a></li>
                                                <li><a class="dropdown-item" href="#"><span>Supprimer</span></a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center info">
                                            <img src="{{ asset('assets/img/avatar.png') }}" alt="Avatar" class="avatar me-3">
                                            <div>
                                                <a href="{{route('detailclient')}}">Mohamed Test</a>
                                                <a href=""><span class="badge-info mx-2">#de874</span></a>
                                                <br>
                                                <span>mohamedtest@gmail.com</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span>2025.02.06</span>
                                    </td>
                                    <td class="text-center">
                                        <span>2025.02.06</span>
                                    </td>
                                    <td class="text-center">
                                        <span>22.00</span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge-warning">Converted</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="dropdown">
                                            <button class="drop-table dropdown-toggle" type="button" data-bs-toggle="dropdown"  aria-expanded="false">
                                                <i class="fa-solid fa-ellipsis-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu my-2">
                                                <li><a class="dropdown-item" href="#"><span>Convertire en facture</span></a></li>
                                                <li><a class="dropdown-item" href="#"><span>Edit</span></a></li>
                                                <li><a class="dropdown-item" href="#"><span>Supprimer</span></a></li>
                                            </ul>
                                        </div>
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
