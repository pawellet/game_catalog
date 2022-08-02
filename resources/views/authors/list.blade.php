@extends('layouts.main')

@section('content')

<h2 class="my-4">Nasi autorzy</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Pozycja</th>
                <th scope="col">Imię</th>
                <th scope="col">Nazwisko</th>
                <th scope="col">Narodowość</th>
                <th scope="col">Informacje o autorze</th>
                <th scope="col">Liczba książek</th>

            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
            <tr>
                <td>{{$loop->iteration}}#</td>
                <td>{{$author->first_name}}</td>
                <td>{{$author->last_name}}</td>
                <td>{{$author->nationality}}</td>
                <td>{{$author->info}}</td>
                <td>{{$author->total}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection