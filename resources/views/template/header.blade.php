<header class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/images/virtualasia-dark.png') }}" alt="Logo Virtual Asia">
            </a>

            <div class="navbar-collapse" id="">
                <div class="custom_menu-btn">
                <button onclick="openNav()">
                    <span class="s-1"> </span>
                    <span class="s-2"> </span>
                    <span class="s-3"> </span>
                </button>
                </div>
                <div id="myNav" class="overlay">
                <div class="overlay-content">
                    <a onclick="topFunction()">HOME</a>
                    <a href="#client">OUR CLIENT</a>
                    <a href="#portfolio">PORTFOLIO</a>
                    <a href="#about">ABOUT</a>
                    <a href="#values">OUR VALUES</a>
                    <a href="#contact">CONTACT US</a>
                </div>
                </div>
            </div>
        </nav>
    </div>
</header>
