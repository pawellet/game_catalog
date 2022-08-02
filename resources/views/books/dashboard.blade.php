@extends('layouts.main')

@section('content')
<div>
    DASHBOARD

    @include('shared.message', ['session'=>$session])
    {{dump($session->get('status'))}}
</div>
@endsection