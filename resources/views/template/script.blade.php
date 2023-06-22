<script type="text/javascript" src="{{ asset('assets/js/jquery-3.4.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap.js') }}"></script>

<script>
    function openNav() {
        document.getElementById("myNav").classList.toggle("menu_width");
        document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
</script>

<script>
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>
