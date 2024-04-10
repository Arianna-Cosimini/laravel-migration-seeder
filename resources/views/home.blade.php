@extends('layouts/app')

@section('content')
    <div class="container py-5">
        <h1>Lista dei Treni</h1>


        <div class="row row-cols-4">

            {{-- @dump($movies) --}}

            @foreach ($trains as $train)
                <div class="col p-2">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $train->company }}</h5>
                            <p class="card-text"><span class="fw-bold">In arrivo da: </span>{{ $train->arrival_station }}</p>
                            <span class="fw-bold">Alle ore: {{ $train->arrival_time }} </span>

                            <span class="fw-bold"> Binario: {{ $train->carriages_number }}</span>
                            <p class="card-text"><span class="fw-bold">In partenza da:
                                </span>{{ $train->departure_station }}
                            </p>
                            <span class="fw-bold">Alle ore: {{ $train->departure_time }} </span>
                            <span class="fw-bold"> Binario: {{ $train->carriages_number }}</span>



                            @if ($train->on_time == 1)
                                <p class="card-text"><span class="fw-bold">In Orario</span></p>
                            @else
                                <p class="card-text"><span class="fw-bold">In Ritardo</span></p>
                            @endif

                            @if ($train->canceled == 1)
                                <p class="card-text"><span class="fw-bold">Cancellato</span></p>
                            @endif

                            <p class="card-text"><span class="fw-bold">Treno n°: </span>{{ $train->train_code }}</p>

                        </div>
                    </div>

                </div>
            @endforeach

        </div>
    </div>
@endsection
