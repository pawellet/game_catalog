@extends('layouts.main')

@section('content')
<h2 class="my-4">Dziś wyprzedaż książek Olgi Tokarczuk!!!</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Tytuł</th>
                <th scope="col">Autor</th>
                <th scope="col">Rok wydania</th>
                <th scope="col">Gatunek</th>
                <th scope="col">Nowa</th>
                <th scope="col">Opcje</th>
            </tr>
        </thead>
        <tbody>
            @forelse($booksSellOff as $book)
            <tr>
                <td>{{$loop->iteration}}#</td>
                <td>{{$book->title}}</td>
                <td>{{$book->first_name}} {{$book->last_name}}</td>
                <td>{{$book->year_of_publish}}</td>
                <td>{{$book->name}}</td>
                <td>{{$book->isnew == 'true' ? 'tak':'nie'}}</td>
                <td>
                    <button>
                        <a class="route" href="{{route('books.show', ['id'=>$book->id, 'book'=>$book])}}">
                            Szczegóły</a>
                    </button>
                </td>
            </tr>
            @empty
            @include('shared.elementnotfound')
            @endforelse

        </tbody>
    </table>
    {{$booksSellOff->links('vendor.pagination.bootstrap-5')}}

</div>
@endsection