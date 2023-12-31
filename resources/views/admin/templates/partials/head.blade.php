<head>
    <title>
        @isset($title)
            {{$title}} -
        @endisset
        {{env('APP_WEB')}}
    </title>
    <meta charset="utf-8" />
    <meta name="description" content="tritoncreative.id" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets/plugins/custom/pace/pace.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/plugins/custom/pace/pace.css') }}">
    @yield('styles')
</head>
