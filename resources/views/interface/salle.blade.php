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
    <title>{{ $salle->name }}</title>
</head>

<body>

    <div class="container py-5">
        <div class="salle-details">
            <h5>{{ $salle->name }}</h5>
            <a href="{{ route('back_date') }}" class="back_date"><i class="fa fa-arrow-left"
                    aria-hidden="true"></i><span>Sélectionner une autre date</span></a>
            <div class="details py-4">
                <h6>{{ \Carbon\Carbon::parse(session('date_select'))->locale('fr')->translatedFormat('D - d M') }}</h6>
                <div class="horaires">
                    <table>
                        @foreach ($tims as $tim)
                            @php
                                $isBooked = false;
                            @endphp

                            @foreach ($bookedTimeSlots as $slot)
                                @if ($tim->id >= $slot['start'] && $tim->id < $slot['end'])
                                    @php
                                        $isBooked = true;
                                    @endphp
                                @endif
                            @endforeach

                            <tr>
                                <td><span>{{ $tim->time }}</span></td>
                                <td class="{{ $isBooked ? 'active' : '' }}"></td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
            <div class="reservation">
                <h6>Pour réserver une salle, sélectionnez une heure disponible.</h6>
                <form action="{{ route('booking_post') }}" method="post" class="py-3">
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
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                            <label for="">Heure de début</label>
                            <select class="form-select" name="tim_start">
                                <option value="" selected disabled>Sélectionner une Heure</option>
                                @foreach ($tims as $tim)
                                    <option value="{{ $tim->id }}">{{ $tim->time }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-lg-6 col-sm-12 col-md-12 mb-3">
                            <label for="">Heure de Fin</label>
                            <select class="form-select" name="tim_end">
                                <option value="" selected disabled>Sélectionner une Heure</option>
                                @foreach ($tims as $tim)
                                    <option value="{{ $tim->id }}">{{ $tim->time }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 text-center">
                            <input type="hidden" name="id" value="{{ $salle->id }}">
                            <input type="submit" value="Validé" class="button w-50 fs-6">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>
