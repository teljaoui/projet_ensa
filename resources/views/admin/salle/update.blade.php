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
    <title>Mettre à jour une salle</title>
</head>

<body>

    <div class="wrapper">
        <aside id="sidebar">
            @include('admin.layout.asidebar')
        </aside>
        <div class="main">
            <div class="container my-5">
                <div class="content">
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
                    <form action="{{ route('upsallepost') }}" method="post" class="py-3 px-3">
                        @csrf
                        <h5 class="text-center">Modifier salle</h5>
                        <div class="row">
                            <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">Nom de la salle:</label>
                                <input type="text" class="form-control" placeholder="Nom du salle" name="name"
                                    value="{{ $salle->name }}" required>
                            </div>
                            <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                                <label for="" class="form-label">Capacité:</label>
                                <input type="number" class="form-control" placeholder="Capacité" name="ability"
                                    value="{{ $salle->ability }}" required>
                            </div>
                            <div class="col-12 text-end">
                                <input type="hidden" name="id" value="{{$salle->id}}">
                                <input type="submit" value="Enregistrer" class="button">
                                <a href="{{ route('salles') }}" class="reset">Annuler</a>
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
