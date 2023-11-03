<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/main.css') }}" />
    <script src="{{ asset('assets/main.js') }}" defer></script>
</head>

<body class="page">
    <header class="site-header contained">
        <a href="#hero" class="skip-link">Skip to main content</a>

        <a href="{{ url('home') }}" class="logo">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo">
            <span>Solar</span>
        </a>

        <button aria-expanded="false" aria-label="menu" class="menu-btn hamburger-menu-btn">
            &#9776;
        </button>

        <nav class="site-nav site-header__nav">
            <button aria-label="close menu" class="menu-btn close-menu-btn">&#215;</button>

            <ul class="menu site-header__menu">
                <li><a href="{{ url('home') }}" class="menu__item">Home</a></li>
                <li><a href="{{ url('about') }}" class="menu__item">About</a></li>
                <li><a href="{{ url('services') }}" class="menu__item">Services</a></li>
                <li><a href="{{ url('contact') }}" class="menu__item">Contact</a></li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <footer class="site-footer">
        <div class="grid-wrapper site-footer__grid-wrapper contained">
            <section class="site-footer__about">
                <h2 class="site-footer__title">About</h2>
                <p class="site-footer__description">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore autem
                    molestiae accusamus dolor, fugit eaque nihil soluta maiores iste possimus
                    facere placeat, dicta repellat ducimus doloremque inventore alias
                    exercitationem iusto.
                </p>
            </section>

            <section class="site-footer__services">
                <h2 class="site-footer__title">Services</h2>
                <ul class="list site-footer__services-list">
                    <li>Residential Solar</li>
                    <li>Commercial Solar</li>
                    <li>Off-Grid Solution</li>
                    <li>On-Grid Soution</li>
                </ul>
            </section>

            <section class="site-footer__links">
                <h2 class="site-footer__title">Links</h2>

                <nav class="site-nav site-footer__nav">
                    <ul class="menu site-footer__menu">
                        <li><a href="{{ url('home') }}"
                                class="menu__item site-footer__menu-item">Home</a></li>
                        <li><a href="{{ url('about') }}"
                                class="menu__item site-footer__menu-item">About</a></li>
                        <li><a href="{{ url('services') }}"
                                class="menu__item site-footer__menu-item">Services</a></li>
                        <li><a href="{{ url('contact') }}"
                                class="menu__item site-footer__menu-item">Contact</a></li>
                    </ul>
                </nav>
            </section>
        </div>

        <span class="copyright contained">
            Copyright &copy;
            @php echo date("Y") @endphp {{ config('app.name') }}. All Rights Reserved.
        </span>
    </footer>

    <div class="menu-overlay"></div>
</body>

</html>