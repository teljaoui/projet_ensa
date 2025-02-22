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
    <title>Ajouter Client</title>
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
                        <h5 class="text-center">modifier le client</h5>
                        <div class="row">
                            <div class="form-group col-lg-12 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">Nom Complet:</label>
                                <input type="text" class="form-control" placeholder="Nom Complet" required>
                            </div>
                            <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">E-mail:</label>
                                <input type="text" class="form-control" placeholder="E-mail" required>
                            </div>
                            <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">Numéro de contact:</label>
                                <input type="text" class="form-control" placeholder="+212 6000000000" required>
                            </div>
                            <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">Site:</label>
                                <input type="text" class="form-control" placeholder="Site" required>
                            </div>
                            <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">Code Postal:</label>
                                <input type="text" class="form-control" placeholder="Code Postal" required>
                            </div>
                            <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">Adresse:</label>
                                <textarea name=""  class="form-control" id="" placeholder="Adresse"></textarea>
                            </div>
                            <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">Notes:</label>
                                <textarea name=""  class="form-control" id="" placeholder="Notes"></textarea>
                            </div>
                            <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">Nom de l'entreprise:</label>
                                <textarea name=""  class="form-control" id="" placeholder="Nom de l'entreprise"></textarea>
                            </div>
                            <div class="col-12 text-end">
                                <input type="submit" value="Enregister" class="button">
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
