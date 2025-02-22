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
                        <h5 class="text-center">Ajouter un produit</h5>
                        <div class="row">
                            <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">Nom du produit:</label>
                                <input type="text" class="form-control" placeholder="Nom de produit" required>
                            </div>
                            <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">Code Produit:</label>
                                <input type="text" class="form-control" placeholder="Code Produit" required>
                            </div>
                            <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">Prix unitaire:</label>
                                <input type="text" class="form-control" placeholder="Prix unitaire" required>
                            </div>
                            <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">Image:</label>
                                <input type="file" name="" class="form-control" id="">
                            </div>
                            <div class="form-group col-lg-12 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">Description:</label>
                                <textarea name=""  class="form-control" id="" placeholder="Description"></textarea>
                            </div>
                          
                            <div class="col-12 text-end">
                                <input type="submit" value="Enregister" class="button">
                                <input type="reset" value="Annuler" class="reset">

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
