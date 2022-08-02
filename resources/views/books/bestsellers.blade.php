@extends('layouts.main')

@section('content')

<h2 class="my-4">Nasze Bestsellery!</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Tytuł</th>
                <th scope="col">Autor</th>
                <th scope="col">Rok wydania</th>
                <th scope="col">Gatunek</th>
                <th scope="col">Punkty</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td>{{$loop->iteration}}#</td>
                <td>{{$book->title}}</td>
                <td>{{$book->first_name}} {{$book->last_name}}</td>
                <td>{{$book->year_of_publish}}</td>
                <td>{{$book->name}}</td>
                <td>{{$book->score}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>
@endsection