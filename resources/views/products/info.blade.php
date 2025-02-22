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
    <title>Détail de Produit</title>
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
                        <h5>Product Details</h5>
                    </div>
                    <div>
                        <a href="{{ route('ajouterclient') }}" class="button">Edite</a>
                        <a href="" class="link">Retour</a>
                    </div>
                </div>
                <div class="content clientinfo d-flex align-items-center">
                    <div>
                        <img src="{{ asset('assets/img/produit.webp') }}" alt="">
                    </div>
                    <div>
                        <h6>Lorem ipsum dolor sit amet.</h6>
                    </div>
                </div>
                <div class="header-client-content d-flex">
                    <a href="" class="active">Overview</a>
                </div>
                <div class="content clientinfo">
                    <div class="row p-3">
                        <div class="form-group col-lg-12 col-sm-12 col-md-12 mb-3">
                            <span>Nom du produit:</span>
                            <p>Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                            <span>Code Produit:</span>
                            <p>fo2558845az</p>
                        </div>
                        <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                            <span>Prix unitaire</span>
                            <p>25.00</p>
                        </div>
                        <div class="form-group col-lg-12 col-sm-12 col-md-12 mb-3">
                            <span>Description:</span>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit sint, magni vero dolore cumque laudantium?</p>
                        </div>
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
