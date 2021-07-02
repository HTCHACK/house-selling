<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('admin.layouts.head')
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <div class="wrapper">
        @include('admin.layouts.menu')
        @yield('content')
    </div>

</body>



@include('admin.layouts.script')
</body>

</html>
