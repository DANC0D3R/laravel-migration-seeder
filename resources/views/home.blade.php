@extends('layout.main')

@section('content')
<div class="dc-container">
    <table class="table striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Azienda</th>
                <th scope="col">Codice treno</th>
                <th scope="col">Orario di paretnza</th>
                <th scope="col">Orario di arrivo</th>
                <th scope="col">Stazione di paretnza</th>
                <th scope="col">Stazione di arrivo</th>
                <th scope="col">N° carrozze</th>
                <th scope="col">In orario</th>
                <th scope="col">Cancellato</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                    <td>{{$train->id}}</td>
                    <td>{{$train->company}}</td>
                    <td>{{$train->code}}</td>
                    <td>{{$train->departure_time}}</td>
                    <td>{{$train->arrival_time}}</td>
                    <td>{{$train->departure_station}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td>{{$train->carriages}}</td>
                    <td>{{$train->on_time == 0 ? 'No' : 'Sì'}}</td>
                    <td>{{$train->canceled == 0 ? 'No' : 'Sì'}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection