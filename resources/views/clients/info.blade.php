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
    <title>Détails du client</title>
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
                    <div>
                        <h5>Détails du client</h5>
                    </div>
                    <div>
                        <a href="{{ route('ajouterclient') }}" class="button">Edite</a>
                        <a href="" class="link">Retour</a>
                    </div>
                </div>
                <div class="content clientinfo d-flex align-items-center">
                    <div>
                        <img src="{{ asset('assets/img/avatar.png') }}" alt="">
                    </div>
                    <div>
                        <h6>Ali Test</h6>
                        <a href="">alitest@gmail.com</a>
                    </div>
                </div>
                <div class="header-client-content d-flex">
                    <a href="" class="active">Aperçu</a>
                    <a href="" class="">Factures</a>
                </div>
                <div class="content clientinfo">
                    <div class="row p-3">
                        <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                            <span>Nom Complet:</span>
                            <p>Ali test</p>
                        </div>
                        <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                            <span>E-mail:</span>
                            <p>alihuncho10@gmail.com</p>
                        </div>
                        <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                            <span>Numéro de contact:</span>
                            <p>+212 652 58 32 34</p>
                        </div>
                        <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                            <span>Site:</span>
                            <p>test</p>
                        </div>
                        <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                            <span>Code Postal:</span>
                            <p>12000</p>
                        </div>
                        <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                            <span>Nom de l'entreprise:</span>
                            <p>Ite consulting</p>
                        </div>
                        <div class="form-group col-lg-12 col-sm-12 col-md-12 mb-3">
                            <span>Adresse:</span>
                            <p>massira 1 , N 282</p>
                        </div>

                    </div>
                </div>
                <div class="content clientfactures">
                    <div class="table-responsive py-1 px-3">
                        <table class="table align-middle ">
                            <thead>
                                <tr>
                                    <th>Identifiant de la facture</th>
                                    <th class="text-center">Date de la facture</th>
                                    <th class="text-center">Date d'échéance</th>
                                    <th class="text-center">Montant</th>
                                    <th class="text-center">Transactions</th>
                                    <th class="text-center">Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <span>fo2584</span>
                                    </td>
                                    <td class="text-center">
                                        <span>2025.02.05</span>
                                    </td>
                                    <td class="text-center">
                                        <span>2025.02.05</span>
                                    </td>
                                    <td class="text-center">
                                        <span>2025.02.06</span>
                                    </td>
                                    <td class="text-center">
                                        <span>Due:3,068.00 </span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge-red">En retard</span>
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
