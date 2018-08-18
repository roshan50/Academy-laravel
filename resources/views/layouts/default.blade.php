<!doctype html>
<html>
    {{--the haed section--}}
    @include('includes.head')
    <body>
        @include('includes.header')
        @yield('content')

        @include('includes.footer')

        @stack('scripts')
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>