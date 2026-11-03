<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>Alwaleed Philanthropies - We Srtive for a world of equal opportinities</title>
</head>
<body>
    <div class="overlay-all"></div>
    {{-- Texte héro fixe --}}
    <div class="hero-fixed">
        <div class="hero-text">
            <h1>We strive for a world <br> of equal <br> opportunities</h1>
            <h2>Together, for humanity.</h2>
        </div>
    </div>


    <div class="stage">
        <section class="section1">
            <video autoplay muted loop playsinline class="background-video"> 
                <source src="{{ asset('vidéos/ap-video.mp4') }}" type="video/mp4"> 
            </video> 
            <div class="overlay"></div> 

            <div class="content"> 
                <header class="site-header">
                    <div class="logo">
                        <img src="{{ asset('images/logo-white.png') }}" alt="Logo" class="logo-image logo-white">
                        <img src="{{ asset('images/logos-green.png') }}" alt="Logo" class="logo-image logo-green">
                    </div>
                    <nav>
                        <div class="menu">
                            <ul>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Projects</a></li>
                                <li><a href="#">Our Campaigns</a></li>
                                <li>
                                    <div class="lang-switch notranslate" translate="no">
                                        {{-- <button onclick="changeLang('fr')">FR</button> | --}}
                                        <button onclick="changeLang('en')" data-lang="en">EN</button> 
                                        <span>|</span>
                                        <button onclick="changeLang('ar')" data-lang="ar">AR</button>
                                    </div>
                                </li>
                                <li>
                                    <button class="burger" id="burger" aria-label="Open menu" aria-expanded="false">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                                <div id="google_translate_element" style="display:none"></div>
                            </ul>
                        </div>
                    </nav>
                </header>

                {{-- Sous menu de navigation --}}
                <div class="side-menu" id="sideMenu" aria-hidden="true">
                    {{-- <button class="close-menu" id="closeMenu" aria-label="Close menu">&times;</button> --}}

                    <ul class="side-links">
                        <li><a href="#">Home</a></li>

                        <li class="has-sub">
                            <button class="sub-toggle" aria-expanded="false">
                                About Us <span class="plus">+</span>
                            </button>
                            <ul class="submenu">
                                <li><a href="#">Who We Are</a></li>
                                <li><a href="#">Quality Policy</a></li>
                                <li><a href="#">Annual Reports</a></li>
                            </ul>
                        </li>

                        <li><a href="#">What We Do</a></li>
                        <li><a href="#">How We Think</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Campaigns</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Areas Of Impact</a></li>
                    </ul>
                </div>

                <button class="menu-backdrop" id="menuBackdrop"
                    aria-label="Fermer le menu" tabindex="-1">
                </button>

                {{-- <div class="hero" id="hero">
                    <h1>We strive for a world <br> of equal <br> opportunities</h1>
                    <h2>Together, for humanity.</h2>
                </div> --}}
            </div>
        </section>



        {{-- debut de la section 2 --}}
        <section class="section2">
            <div class="backdrop">
                <div class="section-content">
                    <div class="content">
                        <h3>Saudi Arabia 2025 Report</h3>
                        <img src="{{ asset('images/oxford-cover.jpg') }}" alt="Saudi Arabia 2025 Report">
                        <h2>Philanthropy in Transformation</h2>
                        <p class="text1">From Oxford Business Group’s The Report: Saudi Arabia 2025</p>
                        <p class="text2">Exploring Saudi Arabia's evolving non-profit sector under Vision 2030, this chapter highlights the shift from traditional charity to strategic, impact-driven philanthropy, shaped by institutional reforms, digital platforms, and cross-sector collaboration for long-term social and economic impact.</p>
                        <p class="link"><a href="#" class="read-more">Explore the report</a></p>
                    </div>
                </div>

                <div class="lign">
                    <p>latest work</p>
                    <div class="trait"></div>
                    <p>2024</p>
                </div>
            </div>
        </section>
    </div>



    


    {{-- <section class="section3">
        <div class="cartes">
            <div class="carte .carte1">
                <div class="left">
                    <img src="{{ asset('images\medium_albania_en.jpg') }}" alt="">
                </div>
                <div class="right">
                    <p>2020-01-02 <span>COMPLETED</span></p>
                    <h1>Albania <br> Earthquake ...</h1>
                    <h3>Providing disaster relief.</h3>
                </div>
            </div>
            <div class="carte .carte2">
                <div class="left">
                    <img src="{{ asset('images\medium_gvKNyDZJm1HsFTII8P1i_waeya.jpg') }}" alt="">
                </div>
                <div class="right">
                    <p>2020-01-02 <span>COMPLETED</span></p>
                    <h1>Empowering Saudi Women: The...</h1>
                    <h3>women and youth empowerment</h3>
                </div>
            </div>
            <div class="carte .carte3">
                <div class="left">
                    <img src="{{ asset('images\medium_3 - with logo.png') }}" alt="">
                </div>
                <div class="right">
                    <p><span>Campaign</span></p>
                    <h1>Alwaleed philantropies laounch atlai</h1>
                    <h3>Supporting education and healthcare initiatives</h3>
                </div>
            </div>
            <div class="carte .carte4">
                <div class="left">
                    <img src="{{ asset('images\medium_DSC_3292-91.jpg') }}" alt="">
                </div>
                <div class="right">
                    <p><span>Campaign</span></p>
                    <h1>Alwaleed philantropies laounch atlai</h1>
                    <h3>Supporting education and healthcare initiatives</h3>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- Section projets / campagnes --}}
    <section class="projects">
        <div class="projects-grid">

            {{-- Grande carte --}}
            <a href="#" class="card card--feature">
                <img src="{{ asset('images\medium_albania_en.jpg') }}" alt="Albania Earthquake Relief" class="card__img" loading="lazy">
                <div class="card__panel">
                    <h3 class="card__title">Albania Earthquake Relief</h3>
                    <span class="card__tag">Providing Disaster Relief</span>
                </div>
            </a>

            {{-- Carte 1 : étiquette à gauche --}}
            <a href="#" class="card card--small card--violet card--left">
                <img src="{{ asset('images\medium_gvKNyDZJm1HsFTII8P1i_waeya.jpg') }}" alt="" class="card__img" loading="lazy">
                <div class="card__body">
                    <span class="card__label">Completed</span>
                    <h3 class="card__title">Empowering Saudi Women: The Waiya Project</h3>
                </div>
            </a>

            {{-- Carte 2 --}}
            <a href="#" class="card card--small card--green">
                <img src="{{ asset('images\medium_3 - with logo.png') }}" alt="" class="card__img" loading="lazy">
                <div class="card__body">
                    <span class="card__label">Campaign</span>
                    <h3 class="card__title">Alwaleed Philanthropies launched Atlai</h3>
                </div>
            </a>

            {{-- Carte 3 --}}
            <a href="#" class="card card--small card--violet">
                <img src="{{ asset('images\medium_DSC_3292-91.jpg') }}" alt="" class="card__img" loading="lazy">
                <div class="card__body">
                    <span class="card__label">Campaign</span>
                    <h3 class="card__title">House of Arabia: Empowering Artisans Through Heritage Crafts</h3>
                </div>
            </a>

        </div>
    </section>





    <script src="{{ asset('js/hero-fixed.js') }}"></script>
    <script src=" {{ asset('js/header-scroll.js') }} "></script>
    <script src=" {{ asset('js/menu.js') }} "></script>
    <script src=" {{ asset('js/traduction.js') }} "></script>
    <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>