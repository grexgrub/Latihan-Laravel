@extends('layout.main')


@section('css')
@endsection()


@section('main')
        @include('components/toolbar')
<div class="container mx-auto justify-evenly xl:justify-start  flex-wrap flex columns-4 ">
        @include('components/card')
        @include('components/card')
        @include('components/card')
        @include('components/card')
        @include('components/tooltip')
    </div>
@endsection()
