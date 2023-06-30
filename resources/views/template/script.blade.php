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

<script>
    var url = 'https://dev2-wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?4359';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
    "enabled":true,
    "chatButtonSetting":{
        "backgroundColor":"#009456",
        "ctaText":"",
        "borderRadius":"25",
        "marginLeft": "0",
        "marginRight": "20",
        "marginBottom": "75",
        "ctaIconWATI":false,
        "position":"right"
    },
    "brandSetting":{
        "brandName":"Virtual Asia",
        "brandSubTitle":"We will reply as soon as possible",
        // "brandImg":"https://virtualasia.id/assets/images/favicon_io/android-chrome-512x512.png",
        "welcomeText":"Hi there!\nHow can I help you?",
        "backgroundColor":"#009456",
        "ctaText":"Start Chat",
        "borderRadius":"25",
        "autoShow":false,
        "phoneNumber":"628170622022"
    }
    };
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>

<script>
    //Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }
    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
