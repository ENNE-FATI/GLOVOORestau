<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurantes</title>

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('assets/css/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/css/meal.css') }}">
    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Rubik:wght@400;500;600;700&family=Shadows+Into+Light&display=swap"
        rel="stylesheet">

    <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="{{ asset('assets/img/images/hero-banner.png') }}" media="min-width(768px)">
  <link rel="preload" as="image" href="{{ asset('assets/img/images/hero-banner-bg.png') }}" media="min-width(768px)">
  <link rel="preload" as="image" href="{{ asset('assets/img/images/hero-bg.jpg') }}">
  
  <link rel="stylesheet" href="{{ asset('assets/css/css/foodhub.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/css/media_query.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Monoton&family=Rubik:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">


</head>

<body id="top">

    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <h1>
                <a href="#Home" class="logo">Foodie<span class="span">.</span></a>
            </h1>

            <nav class="navbar" data-navbar>
                <ul class="navbar-list">
                    <li class="nav-item">
                        <a href="{{ route('restaurant') }}" class="navbar-link" data-nav-link>Restaurant</a>
                    </li>
            
                    
            
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="navbar-link" data-nav-link>Home</a>
                    </li>
            
                    <li class="nav-item">
                        <a href="#about" class="navbar-link" data-nav-link>Sale 50%</a>
                    </li>
            
                    <li class="nav-item">
                        <a href="{{ route('menu') }}" class="navbar-link" data-nav-link>Menu</a>
                    </li>
            
                    <li class="nav-item">
                        <a href="{{ route('sign-up') }}" class="navbar-link" data-nav-link>Sing up</a>
                    </li>
                </ul>
            </nav>
            <div class="header-btn-group">
                <button class="search-btn" aria-label="Search" data-search-btn>
                    <ion-icon name="search-outline"></ion-icon>
                </button>

                <button class="btn btn-hover">Reservation</button>

                <button class="nav-toggle-btn" aria-label="Toggle Menu" data-menu-toggle-btn>
                    <span class="line top"></span>
                    <span class="line middle"></span>
                    <span class="line bottom"></span>
                </button>
            </div>

        </div>
    </header>











    <!--
        - #HOME SECTION
      -->

    <section class="home" id="home">

        <div class="home-left">



            <h1 class="main-heading">Find the best restaurants near you!</h1>

            <p class="home-text">
                Great food, great places, all in one click.
            </p>





        </div>

        <div class="home-right">

            <img src="{{ asset('assets/img/images/food1.png') }}" alt="food image" class="food-img food-1" width="200" loading="lazy">
            <img src="{{ asset('assets/img/images/food2.png') }}" alt="food image" class="food-img food-2" width="200" loading="lazy">
            <img src="{{ asset('assets/img/images/food3.png') }}" alt="food image" class="food-img food-3" width="200" loading="lazy">
            
            <img src="{{ asset('assets/img/images/dialog-1.svg') }}" alt="dialog" class="dialog dialog-1" width="230">
            <img src="{{ asset('assets/img/images/dialog-2.svg') }}" alt="dialog" class="dialog dialog-2" width="230">
            
            <img src="{{ asset('assets/img/images/circle.svg') }}" alt="circle shape" class="shape shape-1" width="25">
            <img src="{{ asset('assets/img/images/circle.svg') }}" alt="circle shape" class="shape shape-2" width="15">
            <img src="{{ asset('assets/img/images/circle.svg') }}" alt="circle shape" class="shape shape-3" width="30">
            <img src="{{ asset('assets/img/images/ring.svg') }}" alt="ring shape" class="shape shape-4" width="60">
            <img src="{{ asset('assets/img/images/ring.svg') }}" alt="ring shape" class="shape shape-5" width="40">

        </div>

    </section>





    <section class="services" id="services">

        <div class="service-card">
            <p class="card-number">01</p>
            <h3 class="card-heading">Located in the heart of the city</h3>
            <p class="card-text">
                Our restaurant offers a cozy atmosphere right in the city center, making it the perfect spot for your
                dining experience.
            </p>
        </div>

        <div class="service-card">
            <p class="card-number">02</p>
            <h3 class="card-heading">Fresh ingredients from local farms</h3>
            <p class="card-text">
                We pride ourselves on using only the freshest organic ingredients sourced from trusted local farms to
                create delicious dishes.
            </p>
        </div>

        <div class="service-card">
            <p class="card-number">03</p>
            <h3 class="card-heading">Fast and reliable delivery service</h3>
            <p class="card-text">
                Enjoy your favorite meals at home with our fast delivery service, ensuring that your food arrives in
                under 30 minutes.
            </p>
        </div>

        <div class="service-card">
            <p class="card-number">04</p>
            <h3 class="card-heading">Professional and experienced chefs</h3>
            <p class="card-text">
                Our team of skilled chefs brings years of experience to the kitchen, ensuring each meal is prepared to
                perfection.
            </p>
        </div>

        <div class="service-card">
            <p class="card-number">05</p>
            <h3 class="card-heading">Exceptional service at all times</h3>
            <p class="card-text">
                We are committed to providing outstanding customer service, ensuring that your dining experience is
                always top-notch.
            </p>
        </div>

    </section>





    <section class="section section-divider white blog" id="blog">
        <div class="container">
            <h2 class="h2 section-title text-center">
                Discover Our Selection of <span class="span">Restaurants</span>
            </h2>
            <p class="section-text" style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">
                Explore a variety of restaurants available on our platform, offering both local and international
                cuisine to satisfy every taste.
            </p>




            <ul class="blog-list">


                <li>
                    <div class="blog-card">

                        <div class="card-banner">
                            <img src="{{ asset('assets/img/images/blog-2.jpg') }}" width="600" height="390" loading="lazy"
                                alt="Making Chicken Strips With New Delicious Ingridents." class="w-100">

                            <div class="badge"> Feane</div>
                        </div>

                        <div class="card-content">

                            <div class="card-meta-wrapper">



                                <a href="{{ route('restaurant.one') }}" class="card-meta-link">
                               
                                    <ion-icon name="fast-food-outline"></ion-icon>
                                    <p class="meta-info">Feane</p>

                                </a>

                                <h3 class="h3">
                                    <a href="{{ route('restaurant.one') }}"  class="card-title">Delicious Dishes at Feane: A Unique Dining
                                        Experience</a>
                                </h3>

                                <p class="card-text">
                                    Savor the flavors of Feane, with fresh, locally sourced ingredients for a memorable
                                    dining experience.
                                </p>



                                <a href="{{ route('restaurant.one') }}"  class="btn-link">
                                    <span>Read More</span>

                                    <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                </a>

                            </div>

                        </div>
                </li>
                <li>
                    <div class="blog-card">

                        <div class="card-banner">
                            <img src="{{ asset('assets/img/images/blog-1.jpg') }}"width="600" height="390" loading="lazy"
                                alt="Making Chicken Strips With New Delicious Ingridents." class="w-100">

                            <div class="badge">Dingo</div>
                        </div>

                        <div class="card-content">

                            <div class="card-meta-wrapper">



                                <a href="{{ route('restaurant.two') }}" class="card-meta-link">
                               
                                    <ion-icon name="restaurant-outline"></ion-icon>

                                    <p class="meta-info">Dingo</p>
                                </a>

                            </div>

                            <h3 class="h3">
                                <a href="{{ route('restaurant.two') }}" class="card-title">Making Chicken Strips With New Delicious
                                    Ingridents.</a>
                            </h3>

                            <p class="card-text">
                                Financial experts support or help you to to find out which way you can raise your funds
                                more...
                            </p>

                            <a href="{{ route('restaurant.two') }}" class="btn-link">
                                <span>Read More</span>

                                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                            </a>

                        </div>

                    </div>
                </li>


                <li>
                    <div class="blog-card">

                        <div class="card-banner">
                            <img src="{{ asset('assets/img/images/blog-3.jpg') }}"  width="600" height="390" loading="lazy"
                                alt="Innovative Hot Chessyraw Pasta Make Creator Fact." class="w-100">

                            <div class="badge">Bistro Soleil</div>
                        </div>

                        <div class="card-content">

                            <div class="card-meta-wrapper">



                                <a href="{{ route('restaurant.three') }}" class="card-meta-link">
                                    <ion-icon name="fast-food-outline"></ion-icon>
                                    <p class="meta-info">Bistro Soleil</p>
                                </a>
                            </div>

                            <h3 class="h3">
                                <a href="{{ route('restaurant.three') }}" class="card-title">Bistro Soleil: A Taste of Authentic French
                                    Cuisine</a>
                            </h3>

                            <p class="card-text">
                                Experience exquisite French cuisine at Bistro Soleil, with fresh, locally sourced
                                ingredients and dishes for every taste.
                            </p>



                            <a href="{{ route('restaurant.three') }}" class="btn-link">
                                <span>Read More</span>

                                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                            </a>

                        </div>

                    </div>
                </li>

            </ul>

        </div>
    </section>

    </article>
    </main>













    <!-- 
    - #FOOTER
  -->

    <footer class="footer">

        <div class="footer-top" style="background-image: url('./assets/images/footer-illustration.png')">
            <div class="container">

                <div class="footer-brand">

                    <a href="" class="logo">Foodie<span class="span">.</span></a>

                    <p class="footer-text">
                        Financial experts support or help you to to find out which way you can raise your funds more.
                    </p>

                    <ul class="social-list">

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-pinterest"></ion-icon>
                            </a>
                        </li>

                    </ul>

                </div>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Contact Info</p>
                    </li>

                    <li>
                        <p class="footer-list-item">01150778216</p>
                    </li>

                    <li>
                        <p class="footer-list-item">sayed12345mohame@gmail.com</p>
                    </li>

                    <li>
                        <address class="footer-list-item">153 Williamson Plaza, Maggieberg, MT 09514</address>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Opening Hours</p>
                    </li>

                    <li>
                        <p class="footer-list-item">Monday-Friday: 08:00-22:00</p>
                    </li>

                    <li>
                        <p class="footer-list-item">Tuesday 4PM: Till Mid Night</p>
                    </li>

                    <li>
                        <p class="footer-list-item">Saturday: 10:00-16:00</p>
                    </li>


                </ul>



            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <p class="copyright-text">
                    &copy; 2024 All Rights Reserved.
                </p>
            </div>
        </div>

    </footer>

    <!-- 
    - #BACK TO TOP
  -->

    <a href="#top" class="back-top-btn" aria-label="Back to top" data-back-top-btn>
        <ion-icon name="chevron-up"></ion-icon>
    </a>





    <!-- 
    - custom js link
  -->
    <script src="./assets/js/script.js" defer></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>