@extends('layouts/app')
@section('title')
Trains
@endsection



@section('content')
    <div class="container py-5">
        <h1 class="text-center text-uppercase display-1 mb-4 fw-bold">Lista dei Treni</h1>


        <div class="row row-cols-4">

            {{-- @dump($movies) --}}

            @foreach ($trains as $train)
                <div class="col p-2">
                    <div class="card bg-light text-black" style="width: 18rem; height:450px">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title text-uppercase fw-bold">{{ $train->company }}</h5>
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
