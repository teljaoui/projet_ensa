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

    <div class="wrapper">
        <aside id="sidebar">
            @include('admin.layout.asidebar')
        </aside>
        <div class="main">
            <div class="container my-5">
                <div class="client-top d-flex align-items-center justify-content-end">
                    <a href="{{ route('salleadd') }}" class="button">Ajouter une Salle</a>
                </div>
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
                    <div class="table-responsive py-1 px-3">
                        <table class="table align-middle ">
                            <thead>
                                <tr>
                                    <th>Salle</th>
                                    <th class="text-center">Capacité</th>
                                    <th class="text-end">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($salles as $salle)
                                    <tr>
                                        <td>
                                            <span>{{ $salle->name }}</span>
                                        </td>
                                        <td class="text-center">
                                            <span>{{ $salle->ability }}</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="{{ route('salleup', ['id' => $salle->id]) }}"
                                                class="btn-action edite"><i class="fas fa-edit"></i></a>
                                            <a href="{{ route('deletesalle', ['id' => $salle->id]) }}"
                                                class="btn-action confirmdelete"><i
                                                    class="fas fa-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12">
                    {{ $salles->links() }}
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
