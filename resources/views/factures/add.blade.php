<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <title>Nouvelle Facture</title>
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
                <div class="content">
                    <form action="" class="py-3 px-3">
                        <h5 class="text-center">Nouvelle facture</h5>
                        <div class="row mt-4">
                            <div class="form-group col-lg-4 col-sm-12 col-md-12 mb-3">
                                <label class="form-label">Client:</label>
                                <select class="form-select">
                                    <option value="" selected disabled>Sélectionner un client</option>
                                    <option value="1">Teljaoui Mohamed</option>
                                    <option value="2">Ali Test</option>
                                    <option value="3">Test Mohamed</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-4 col-sm-12 col-md-12 mb-3">
                                <label class="form-label">Facture #:</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group col-lg-4 col-sm-12 col-md-12 mb-3">
                                <label class="form-label">Date de la facture:</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group col-lg-4 col-sm-12 col-md-12 mb-3">
                                <label class="form-label">Date d'échéance:</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-12 text-end">
                                <button type="button" id="ajouterLigneFacture" class="button">Ajouter</button>
                            </div>
                            <div class="table-responsive py-1 px-3">
                                <table class="table align-middle">
                                    <thead>
                                        <tr>
                                            <th>Produit</th>
                                            <th>QTY</th>
                                            <th>Prix unitaire</th>
                                            <th class="text-center">Taxe</th>
                                            <th class="text-center">Montant</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="factureBody">
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-12 d-flex justify-content-end">
                                <div class="devis-total border-top py-2 w-25">
                                    <div class="d-flex justify-content-between">
                                        <span>Sous Total:</span>
                                        <p id="sousTotal">0.00</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Taxe:</span>
                                        <p id="taxeTotal">0.00</p>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <span>Total:</span>
                                        <p id="total">0.00</p>
                                    </div>
                                </div>
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

</body>

</html>
