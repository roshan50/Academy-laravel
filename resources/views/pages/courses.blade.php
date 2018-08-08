@extends('layouts.default')
@section('content')
    <div class="main">
        @include('module.video')

        <div class="container-fluid d-flex justify-content-center">
            <div class="container">
                @include('module.main-course')
                @include('module.sub-course')
            </div>
        </div>
    </div>
@endsection