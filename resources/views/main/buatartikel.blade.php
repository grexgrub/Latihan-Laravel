@extends('layout.main')



@section('main')
<form class="container mx-auto flex-col justify-evenly md:justify-start  flex-wrap flex columns-4 ">
    <div class="flex-col flex mb-4 w-full lg:w-6/12">
         @include('components/input-artikel')
    </div>
    <textarea name="editor" id="editor" cols="30" rows="10"></textarea>
    <div>
        @include('components/btn', ['bg' => 'bg-blue-700', 'fungsi' => 'Upload', 'text' => 'text-white', 'hover' => 'bg-blue-800'])
        @include('components/btn', ['bg' => 'bg-yellow-300', 'fungsi' => 'Save', 'text' => 'text-gray-900','hover' => 'bg-yellow-500'])
    </div>
</form>
@include('components/tooltip')
@endsection()

@section('script')
<script src="{{ URL::asset('js/ckeditor/ckeditor5super.js') }}"></script>
<script src="{{ URL::asset('js/ckeditor/ckeditor.js') }}"></script>
@endsection()
