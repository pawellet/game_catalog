@extends('layouts.main')

@section('content')
<ul class="list-group">
    @forelse($bookInfo as $book)
    <li class="list-group-item">Id: {{$id}}</li>
    <li class="list-group-item">Tytuł: {{$book->title}}</li>
    <li class="list-group-item">Opis Książki: {{$book->description}}</li>
    <li class="list-group-item">Wydawca: {{$book->publisher}}</li>
    <li class="list-group-item">Autor: {{$book->first_name}} {{$book->last_name}}</li>
    <li class="list-group-item">Język: {{$book->language}}</li>
    <li class="list-group-item">Nowa: {{$book->isnew == 'true' ? 'tak' : 'nie'}}</li>
    <li class="list-group-item">Rok Wydania: {{$book->year_of_publish}}</li>
    @empty
    @include('shared.elementnotfound')
    @endforelse
</ul>
@endsection