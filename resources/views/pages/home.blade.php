@extends('layouts.default')
@section('content')
    <div class="main">
        @include('module.banner')
        @include('module.search')

       <div class="container-fluid d-flex justify-content-center">
            <div class="container">
               @include('module.new-course')

                @include('module.category')

                @include('module.update-course')

            </div>
        </div>
        @push('scripts')
            <script src="/js/modules/flickity.js"></script>
        @endpush
    </div>
@endsection