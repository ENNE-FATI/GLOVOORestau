<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/meal.css">
    
    <title>MEANU</title>
</head>
<body id="top" >
  <header class="header" data-header>
    <div class="container">
      <h1>
        <a href="#Home" class="logo">Foodie<span class="span">.</span></a>
      </h1>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="nav-item">
            <a href="meal.html" class="navbar-link" data-nav-link>Menu</a>
          </li>

          <li class="nav-item">
            <a href="index.html" class="navbar-link" data-nav-link>Home</a>
          </li>

          

          <li class="nav-item">
            <a href="#about" class="navbar-link" data-nav-link>Sale 50% </a>
          </li>

         

          <li class="nav-item">
            <a href="Book-Table.html" class="navbar-link" data-nav-link>Book-Table</a>
          </li>
          <li class="nav-item">
            <a href="log-in.html" class="navbar-link" data-nav-link>Sing up</a>
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
    - #SEARCH BOX
  -->

  <div class="search-container" data-search-container>

    <div class="search-box">
      <input type="search" name="search" aria-label="Search here" placeholder="Type keywords here..."
        class="search-input">

      <button class="search-submit" aria-label="Submit search" data-search-submit-btn>
        <ion-icon name="search-outline"></ion-icon>
      </button>
    </div>

    <button class="search-close-btn" aria-label="Cancel search" data-search-close-btn></button>

  </div>

  <main>
    <article>

  
      <section class="section food-menu" id="food-menu">
        <div class="container">

          <p class="section-subtitle">Popular Dishes</p>

          <h2 class="h2 section-title">
            Our Delicious <span class="span">Foods</span>
          </h2>

          <p class="section-text">
            Food is any substance consumed to provide nutritional support for an organism.
          </p>

          <ul class="fiter-list">

            

          <ul class="food-menu-list">

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/food-menu-1.png" width="300" height="300" loading="lazy"
                    alt="Fried Chicken Unlimited" class="w-100">

                  <div class="badge">-15%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">sea food</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">sea food Unlimited</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price">$49.00</data>

                  <del class="del" value="69.00">$69.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/food-menu-2.png" width="300" height="300" loading="lazy"
                    alt="Burger King Whopper" class="w-100">

                  <div class="badge">-10%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Noddles</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Burger King Whopper</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="29.00">$29.00</data>

                  <del class="del">$39.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/food-menu-3.png" width="300" height="300" loading="lazy"
                    alt="White Castle Pizzas" class="w-100">

                  <div class="badge">-25%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Pizzas</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">White Castle Pizzas</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="49.00">$49.00</data>

                  <del class="del">$69.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/food-menu-4.png" width="300" height="300" loading="lazy"
                    alt="Bell Burrito Supreme" class="w-100">

                  <div class="badge">-20%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Burrito</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Bell Burrito Supreme</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="59.00 ">$59.00</data>

                  <del class="del">$69.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/food-menu-5.png" width="300" height="300" loading="lazy"
                    alt="Kung Pao Chicken BBQ" class="w-100">

                  <div class="badge">-5%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Nuggets</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Kung Pao Chicken BBQ</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="49.00">$49.00</data>

                  <del class="del">$69.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/food-menu-6.png" width="300" height="300" loading="lazy"
                    alt="Wendy's Chicken" class="w-100">

                  <div class="badge">-15%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Chicken</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Wendy's Chicken</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="49.00">$49.00</data>

                  <del class="del">$69.00</del>

                </div>

              </div>
            </li>

          </ul>


        </div>

      </section>
      <section class="section food-menu" id="food-menu">
        <div class="container">
          <h2 class="h2 section-title">
            best seller <span class="span">Foods.</span>
          </h2>

          <p class="section-text">
            Food is any substance consumed to provide nutritional support for an organism.
          </p>

          <ul class="fiter-list">
          <ul class="fiter-list">

            

          <ul class="food-menu-list">

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/food-menu-1.png" width="300" height="300" loading="lazy"
                    alt="Fried Chicken Unlimited" class="w-100">

                  <div class="badge">-15%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">sea food</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">sea food Unlimited</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price">$49.00</data>

                  <del class="del" value="69.00">$69.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/food-menu-2.png" width="300" height="300" loading="lazy"
                    alt="Burger King Whopper" class="w-100">

                  <div class="badge">-10%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Noddles</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Burger King Whopper</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="29.00">$29.00</data>

                  <del class="del">$39.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/menu ber/sandwich_cheese.png" width="300" height="300" loading="lazy"
                    alt="White Castle Pizzas" class="w-100">

                  <div class="badge">-25%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Pizzas</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">White Castle Pizzas</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="49.00">$49.00</data>

                  <del class="del">$69.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/menu ber/club_sandwich.png" width="300" height="300" loading="lazy"
                    alt="Bell Burrito Supreme" class="w-100">

                  <div class="badge">-20%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Burrito</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Bell Burrito Supreme</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="59.00 ">$59.00</data>

                  <del class="del">$69.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/food-menu-6.png" width="300" height="300" loading="lazy"
                    alt="Kung Pao Chicken BBQ" class="w-100">

                  <div class="badge">-5%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Nuggets</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Kung Pao Chicken BBQ</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="49.00">$49.00</data>

                  <del class="del">$69.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/menu ber/chicken_burger.png" width="300" height="300" loading="lazy"
                    alt="Wendy's Chicken" class="w-100">

                  <div class="badge">-15%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Chicken</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Wendy's Chicken</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="49.00">$49.00</data>

                  <del class="del">$69.00</del>

                </div>

              </div>
            </li>

          </ul>


        </div>

      </section>
      <section class="section food-menu" id="food-menu">
        <div class="container">

          
          <h2 class="h2 section-title">
            Our Delicious <span class="span">Berger</span>
          </h2>

          <p class="section-text">
            Food is any substance consumed to provide nutritional support for an organism.
          </p>

          <ul class="fiter-list">

            

          <ul class="food-menu-list">

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="assets/images/menu ber/burger_bbq.png" width="350" height="350" loading="lazy"
                    alt="Fried Chicken Unlimited" class="w-100">

                  <div class="badge">-15%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Berger</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Burger King Whopper</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price">$49.00</data>

                  <del class="del" value="69.00">$69.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/menu ber/burger_duble.png" width="300" height="300" loading="lazy"
                    alt="Burger King Whopper" class="w-100">

                  <div class="badge">-10%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Berger</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Burger King Whopper</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="29.00">$29.00</data>

                  <del class="del">$39.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/menu ber/chicken_burger.png" width="300" height="300" loading="lazy"
                    alt="White Castle Berger" class="w-100">

                  <div class="badge">-25%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Berger</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Burger King Whopper</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="49.00">$49.00</data>

                  <del class="del">$69.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/menu ber/club_sandwich.png" width="300" height="300" loading="lazy"
                    alt="Bell Berger Supreme" class="w-100">

                  <div class="badge">-20%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Berger</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Burger King Whopper</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="59.00 ">$59.00</data>

                  <del class="del">$69.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/menu ber/hamburger.png" width="300" height="300" loading="lazy"
                    alt="Berger" class="w-100">

                  <div class="badge">-5%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Berger</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Burger King Whopper</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="49.00">$49.00</data>

                  <del class="del">$69.00</del>

                </div>

              </div>
            </li>

            <li>
              <div class="food-menu-card">

                <div class="card-banner">
                  <img src="./assets/images/menu ber/hamburger.png" width="300" height="300" loading="lazy"
                    alt="Wendy's Berger" class="w-100">

                  <div class="badge">-15%</div>

                  <button class="btn food-menu-btn">Order Now</button>
                </div>

                <div class="wrapper">
                  <p class="category">Berger</p>

                  <div class="rating-wrapper">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                </div>

                <h3 class="h3 card-title">Burger King Whopper</h3>

                <div class="price-wrapper">

                  <p class="price-text">Price:</p>

                  <data class="price" value="49.00">$49.00</data>

                  <del class="del">$69.00</del>

                </div>

              </div>
            </li>

          </ul>


        </div>


        <ul class="food-menu-list">

          <li>
          
      
      </section>
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
          &copy; 2024  All Rights Reserved.
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
