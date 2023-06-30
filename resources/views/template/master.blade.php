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

    <!-- Back to top button -->
    <button type="button" class="btn btn-dark btn-floating btn-lg" id="btn-back-to-top" >
        <i class="bi bi-arrow-up"></i>
    </button>

    @include('template.script')

</body>
</html>
