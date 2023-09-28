@extends('layouts.public')

@section('title', 'Laravel-Migration-Seeder')

@section('content')

<h1 class="text-center mt-5 text-uppercase fw-bolder">Treni</h1>

<div class="container mt-5">

    <p class="mt-5 fw-semibold">Ecco i treni che partono oggi:</p>

    <table class="table table-light mt-5">

        <thead>

            <tr>
                <th scope="col">Company</th>
                <th scope="col">Stazione di Partenza</th>
                <th scope="col">Stazione di arrivo</th>
                <th scope="col">Codice treno</th>
                <th scope="col">Data di Partenza</th>
            </tr>

        </thead>

        <tbody>

            @foreach ($trains as $train)

            <tr>
                <td>{{ $train->Company }}</td>
                <td>{{ $train->Stazione_di_partenza }}</td>
                <td>{{ $train->Stazione_di_arrivo }}</td>
                <td>{{$train->Codice_treno }}</td>
                <td>{{ $train->Data_di_partenza }}</td>
            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection
