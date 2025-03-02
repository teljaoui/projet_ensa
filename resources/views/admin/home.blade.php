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
    <title>Tableau de bord</title>
</head>

<body>

    <div class="wrapper">
        <aside id="sidebar">
            @include('admin.layout.asidebar')
        </aside>
        <div class="main">
            <div class="container my-5">
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
                <div class="content">
                    <div class="table-responsive py-1 px-3">
                        <table class="table align-middle ">
                            <thead>
                                <tr>
                                    <th>Professeur</th>
                                    <th class="text-center">Salle</th>
                                    <th class="text-center">Date</th>
                                    <th class="text-center">Heure Début</th>
                                    <th class="text-center">Heure Fin</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $booking)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center info">
                                                <img src="{{ asset('assets/img/avatar.png') }}" alt="Avatar"
                                                    class="avatar me-3">
                                                <div>
                                                    <a
                                                        href="maileto:{{ $booking->prof->email }}">{{ $booking->prof->name }}</a><br>
                                                    <span>{{ $booking->prof->email }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge-info">{{ $booking->salle->name }}</span>
                                        </td>
                                        <td class="text-center">
                                            <span>{{ $booking->date_booking }}</span>
                                        </td>
                                        <td class="text-center">
                                            <span>{{ $booking->timeStart->time }}</span>
                                        </td>
                                        <td class="text-center">
                                            <span>{{ $booking->timeFin->time }}</span>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('delete_booking', ['id' => $booking->id]) }}"
                                                class="btn-action confirmdelete"><i
                                                    class="fas fa-trash text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
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
