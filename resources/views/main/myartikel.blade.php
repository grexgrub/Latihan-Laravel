@extends('layout.main')



@section('main')
@include('components/toolbar')
<div class="container mx-auto justify-evenly xl:justify-start  flex-wrap flex columns-4 ">
    @include('components/cardme')
    @include('components/tooltip')
</div>
@endsection()
