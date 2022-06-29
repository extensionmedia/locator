@extends('app')
@section('content')
    @include('pages.client.content', ['clients'=>$clients])
@endsection