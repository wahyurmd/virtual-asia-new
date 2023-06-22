<!DOCTYPE html>
<html>
<head>
    @include('template.head')
</head>
<body>
    @include('sweetalert::alert')
    
    @yield('content')

    @include('template.info')

    @include('template.footer')

    @include('template.script')

</body>
</html>
