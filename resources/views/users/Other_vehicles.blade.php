<!DOCTYPE html>
<html lang="en">

<head>
    <title>Villa Belgium</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="TemplatesJungle">
    <meta name="keywords" content="ecommerce,electronic,store">
    <meta name="description" content="Bootstrap 5 Electronic Shop HTML CSS Template">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/vendor.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">

    <style>
        body {
            background-color: #130909;
        }
        .prev-button, .next-button {
          display: inline-block;
          padding: 10px 20px;
          background-color: #1a0000;
          color: white;
          text-decoration: none;
          border-radius: 5px;
        
      }

      .prev-button:hover, .next-button:hover {
          background-color: #000000;
      }
      .container-fluid {
       position: relative;
      }

    </style>
</head>
<body data-bs-theme="dark">
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <defs>
     
      <symbol xmlns="http://www.w3.org/2000/svg" id="dribble" viewBox="0 0 15 15">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
          d="M4.839 1.024c3.346 4.041 5.096 7.922 5.704 12.782M.533 6.82c5.985-.138 9.402-1.083 11.97-4.216M2.7 12.594c3.221-4.902 7.171-5.65 11.755-4.293M14.5 7.5a7 7 0 1 0-14 0a7 7 0 0 0 14 0Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <rect width="20" height="18" x="2" y="4" rx="4" />
          <path d="M8 2v4m8-4v4M2 10h20" />
        </g>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="shopping-bag" viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path
            d="M3.977 9.84A2 2 0 0 1 5.971 8h12.058a2 2 0 0 1 1.994 1.84l.803 10A2 2 0 0 1 18.833 22H5.167a2 2 0 0 1-1.993-2.16l.803-10Z" />
          <path d="M16 11V6a4 4 0 0 0-4-4v0a4 4 0 0 0-4 4v5" />
        </g>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="gift" viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <rect width="18" height="14" x="3" y="8" rx="2" />
          <path d="M12 5a3 3 0 1 0-3 3m6 0a3 3 0 1 0-3-3m0 0v17m9-7H3" />
        </g>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-cycle" viewBox="0 0 24 24">
        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
          <path
            d="M22 12c0 6-4.39 10-9.806 10C7.792 22 4.24 19.665 3 16m-1-4C2 6 6.39 2 11.806 2C16.209 2 19.76 4.335 21 8" />
          <path d="m7 17l-4-1l-1 4M17 7l4 1l1-4" />
        </g>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="link" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M12 19a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0-4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm-5 0a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm7-12h-1V2a1 1 0 0 0-2 0v1H8V2a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-9h16Zm0-11H4V6a1 1 0 0 1 1-1h1v1a1 1 0 0 0 2 0V5h8v1a1 1 0 0 0 2 0V5h1a1 1 0 0 1 1 1ZM7 15a1 1 0 1 0-1-1a1 1 0 0 0 1 1Zm0 4a1 1 0 1 0-1-1a1 1 0 0 0 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-left" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M17 11H9.41l3.3-3.29a1 1 0 1 0-1.42-1.42l-5 5a1 1 0 0 0-.21.33a1 1 0 0 0 0 .76a1 1 0 0 0 .21.33l5 5a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.42L9.41 13H17a1 1 0 0 0 0-2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="arrow-right" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M17.92 11.62a1 1 0 0 0-.21-.33l-5-5a1 1 0 0 0-1.42 1.42l3.3 3.29H7a1 1 0 0 0 0 2h7.59l-3.3 3.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 .21-.33a1 1 0 0 0 0-.76Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="play" viewBox="0 0 24 24">
        <g fill="none" fill-rule="evenodd">
          <path
            d="M24 0v24H0V0h24ZM12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035c-.01-.004-.019-.001-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427c-.002-.01-.009-.017-.017-.018Zm.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093c.012.004.023 0 .029-.008l.004-.014l-.034-.614c-.003-.012-.01-.02-.02-.022Zm-.715.002a.023.023 0 0 0-.027.006l-.006.014l-.034.614c0 .012.007.02.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01l-.184-.092Z" />
          <path fill="currentColor"
            d="M5.669 4.76a1.469 1.469 0 0 1 2.04-1.177c1.062.454 3.442 1.533 6.462 3.276c3.021 1.744 5.146 3.267 6.069 3.958c.788.591.79 1.763.001 2.356c-.914.687-3.013 2.19-6.07 3.956c-3.06 1.766-5.412 2.832-6.464 3.28c-.906.387-1.92-.2-2.038-1.177c-.138-1.142-.396-3.735-.396-7.237c0-3.5.257-6.092.396-7.235Z" />
        </g>
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="category" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 5.5h-6.28l-.32-1a3 3 0 0 0-2.84-2H5a3 3 0 0 0-3 3v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-10a3 3 0 0 0-3-3Zm1 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-13a1 1 0 0 1 1-1h4.56a1 1 0 0 1 .95.68l.54 1.64a1 1 0 0 0 .95.68h7a1 1 0 0 1 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="calendar" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 4h-2V3a1 1 0 0 0-2 0v1H9V3a1 1 0 0 0-2 0v1H5a3 3 0 0 0-3 3v12a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm1 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-7h16Zm0-9H4V7a1 1 0 0 1 1-1h2v1a1 1 0 0 0 2 0V6h6v1a1 1 0 0 0 2 0V6h2a1 1 0 0 1 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="heart" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M20.16 4.61A6.27 6.27 0 0 0 12 4a6.27 6.27 0 0 0-8.16 9.48l7.45 7.45a1 1 0 0 0 1.42 0l7.45-7.45a6.27 6.27 0 0 0 0-8.87Zm-1.41 7.46L12 18.81l-6.75-6.74a4.28 4.28 0 0 1 3-7.3a4.25 4.25 0 0 1 3 1.25a1 1 0 0 0 1.42 0a4.27 4.27 0 0 1 6 6.05Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="plus" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M19 11h-6V5a1 1 0 0 0-2 0v6H5a1 1 0 0 0 0 2h6v6a1 1 0 0 0 2 0v-6h6a1 1 0 0 0 0-2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="minus" viewBox="0 0 24 24">
        <path fill="currentColor" d="M19 11H5a1 1 0 0 0 0 2h14a1 1 0 0 0 0-2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M8.5 19a1.5 1.5 0 1 0 1.5 1.5A1.5 1.5 0 0 0 8.5 19ZM19 16H7a1 1 0 0 1 0-2h8.491a3.013 3.013 0 0 0 2.885-2.176l1.585-5.55A1 1 0 0 0 19 5H6.74a3.007 3.007 0 0 0-2.82-2H3a1 1 0 0 0 0 2h.921a1.005 1.005 0 0 1 .962.725l.155.545v.005l1.641 5.742A3 3 0 0 0 7 18h12a1 1 0 0 0 0-2Zm-1.326-9l-1.22 4.274a1.005 1.005 0 0 1-.963.726H8.754l-.255-.892L7.326 7ZM16.5 19a1.5 1.5 0 1 0 1.5 1.5a1.5 1.5 0 0 0-1.5-1.5Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="check" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M18.71 7.21a1 1 0 0 0-1.42 0l-7.45 7.46l-3.13-3.14A1 1 0 1 0 5.29 13l3.84 3.84a1 1 0 0 0 1.42 0l8.16-8.16a1 1 0 0 0 0-1.47Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="trash" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M10 18a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1ZM20 6h-4V5a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H4a1 1 0 0 0 0 2h1v11a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8h1a1 1 0 0 0 0-2ZM10 5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm7 14a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V8h10Zm-3-1a1 1 0 0 0 1-1v-6a1 1 0 0 0-2 0v6a1 1 0 0 0 1 1Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-outline" viewBox="0 0 15 15">
        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
          d="M7.5 9.804L5.337 11l.413-2.533L4 6.674l2.418-.37L7.5 4l1.082 2.304l2.418.37l-1.75 1.793L9.663 11L7.5 9.804Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-solid" viewBox="0 0 15 15">
        <path fill="currentColor"
          d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="search" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 24 24">
        <path fill="currentColor"
          d="M15.71 12.71a6 6 0 1 0-7.42 0a10 10 0 0 0-6.22 8.18a1 1 0 0 0 2 .22a8 8 0 0 1 15.9 0a1 1 0 0 0 1 .89h.11a1 1 0 0 0 .88-1.1a10 10 0 0 0-6.25-8.19ZM12 12a4 4 0 1 1 4-4a4 4 0 0 1-4 4Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 15 15">
        <path fill="currentColor"
          d="M7.953 3.788a.5.5 0 0 0-.906 0L6.08 5.85l-2.154.33a.5.5 0 0 0-.283.843l1.574 1.613l-.373 2.284a.5.5 0 0 0 .736.518l1.92-1.063l1.921 1.063a.5.5 0 0 0 .736-.519l-.373-2.283l1.574-1.613a.5.5 0 0 0-.283-.844L8.921 5.85l-.968-2.062Z" />
      </symbol>
    </defs>
  </svg>

  </div>

  <nav class="navbar navbar-expand-lg text-white text-uppercase fs-7 ls-1 py-5 align-items-center">
    <div class="container-fluid">
      <div class="row align-items-center w-100">
        <div class="col-8 col-md-3">
          <a href="{{route('home')}}"><img src="images/LOGO/logoVB.png" width="204" height="46" alt="logo"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="col-3 col-md-3 text-md-end">
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 gap-1 gap-md-5 pe-3">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownPages" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">QUICK SEARCH</a>
                  <ul class="dropdown-menu list-unstyled p-4" aria-labelledby="dropdownPages">
                  <li>
                      <a href="{{ route('see_all') }}" class="dropdown-item item-anchor"><span
                          class="badge bg-primary ms-2">SEE ALL CATEGORIES</span></a>
                    </li>   
                  <li>
                      <h6>HOUSES FOR RENT</h6>
                      <a href="{{ route('villas') }}" class="dropdown-item item-anchor"><span
                          class="badge bg-primary ms-2">VILLA</span></a>
                    </li>
                    <li>
                      <a href="{{ route('houses') }}" class="dropdown-item item-anchor"><span
                          class="badge bg-primary ms-2">RESIDENTIAL PROPERTY</span></a>
                    </li><br>
                    <li>
                      <h6>RENTAL CARS</h6>
                      <a href="{{ route('other_vehicles') }}" class="dropdown-item item-anchor"><span
                          class="badge bg-primary ms-2">USUAL</span></a>
                    </li>
                    <li>
                      <a href="{{ route('touring_vehicles') }}" class="dropdown-item item-anchor"><span
                          class="badge bg-primary ms-2">TOURISM</span></a>
                    </li>
                    <li>
                        <h6>FOUR OUR CONTACTS</h6>
                        <a href="#footer" class="dropdown-item item-anchor">
                            <span class="badge bg-primary ms-2">Contact-us</span>
                        </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
  </nav>

  <section>
    <div class="container-fluid">
        <div class="slideshow slide-in arrow-absolute text-white" style="height: 80vh;">
            <div class="swiper-wrapper">
                <div class="swiper-slide jarallax">
                    <img src="images/ME/villa1.jpg" class="jarallax-img" alt="slideshow">
                    <div class="banner-content w-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 pt-5">
                                    <h2 class="display-1 ls-0 mt-5 pt-5 txt-fx slide-up"></h4><br><br><br>
                                    <p class="caption">Villa Belgium is more than a B@B. We ensure that your stay is carefree.we will arrange everything for you. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide jarallax">
                    <img src="images/Home/RentalCar.png" class="jarallax-img" alt="slideshow">
                    <div class="banner-content w-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 pt-5">
                                    <h4 class="display-1 ls-0 mt-5 pt-5 txt-fx slide-up">Rent a car with or without a driver</h4>
                                    <p class="caption"> We can also tailor-make a combination trip to Kigali-Gisenyi. Safari trips to gorillas or volcanoes, you name it !</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide jarallax">
                    <img src="images/ME/openDoor.jpg" class="jarallax-img" alt="slideshow">
                    <div class="banner-content w-100">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-10 pt-5">
                                    <p class="display-1 ls-0 mt-5 pt-5 txt-fx slide-up">the possibilities are endless in Villa Belgium</p>
                                    <p class="caption">We can also arrange a cycling holiday in Kigali or Ginsenyi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="pagination-wrapper position-absolute">
                <div class="container">
                    <div class="slideshow-swiper-pagination"></div>
                </div>
            </div>
            <div class="icon-arrow icon-arrow-left text-white">
                <svg width="50" height="50" viewBox="0 0 24 24">
                    <use xlink:href="#arrow-left"></use>
                </svg>
            </div>
            <div class="icon-arrow icon-arrow-right text-white">
                <svg width="50" height="50" viewBox="0 0 24 24">
                    <use xlink:href="#arrow-right"></use>
                </svg>
            </div>
        </div>
    </div>
</section>

  <section id="best-sellers" class="best-sellers py-5 mb-5">
    <div class="container-fluid">
        <div class="d-flex flex-wrap justify-content-between align-items-center mt-5 mb-3">
            <h4 class="text-uppercase">OTHER AVAILABLE VEHICLES</h4>
            <div class="navigation-buttons">
                <a href="{{route('touring_vehicles')}}" class="prev-button"><i class="fas fa-arrow-left"></i>Go back</a>
            </div>
        </div>

        <div data-aos="fade-in">
            @if($filteredOtherVehicle ->count() == 0)
                <div class="alert alert-danger" role="alert">
                    Sorry, all vehicles in this category are taken.
                </div>
            @else
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4">
                    @foreach($filteredOtherVehicle  as $select)
                    <div class="col">
                        <div class="product-item hover-effect-slide">
                            <div class="jarallax position-relative mb-3" style="weight: 800px;">
                                <img style="height: 410px;" src="{{ asset('property_images/'.$select->image) }}" alt="$select->property_type" class="product-image img-fluid">
                                <button class="btn btn-primary w-100 mt-2 rounded-1 book-btn" onclick="openBookingModal('{{ $select->id }}', '{{ $select->status }}')">Book this</button>
                            </div>
                            <div class="product-content d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                                <h5 class="fs-5 mt-3">
                                    <p>status - {{$select->status}}<br>daily rate -> {{$select->price}} <br> address -> {{$select->location}}</p>
                                </h5>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</section>

 <!-- My model  -->
 <div id="bookingModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Book Property</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="bookingModalBody">
            
            </div>
        </div>
    </div>
</div>

<section id="categories" class="categories overflow-hidden">
    <h4 class="text-uppercase">CATEGORY</h4>
    <div class="container-fluid">
        <div class="row g-5">
            <div class="col-md-3">
                <span class="d-block py-3 text-white text-uppercase fs-7 ls-1">01.Villa </span>
                <div class="jarallax position-relative mb-4" style="height: 480px;">
                    <img src="images/Home/VillaCategory.jpg" alt="categories" class="jarallax-img img-fluid">
                    <div class="category-content position-absolute bottom-0 p-5 text-uppercase">
                        <a href="{{ route('villas') }}" class="text-white btn-link">CHOOSE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <span class="d-block py-3 text-white text-uppercase fs-7 ls-1">02. residential property</span>
                <div class="jarallax position-relative mb-3" style="height: 480px;">
                    <img src="images/Home/residential.JPG" alt="categories" class="jarallax-img img-fluid">
                    <div class="category-content position-absolute bottom-0 p-5 text-uppercase">
                        <a href="{{ route('houses') }}" class="text-white btn-link">CHOOSE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <span class="d-block py-3 text-white text-uppercase fs-7 ls-1">03.Touring vehicles</span>
                <div class="jarallax position-relative mb-3" style="height: 480px;">
                    <img src="images/Home/safari.jpeg" alt="categories" class="jarallax-img img-fluid">
                    <div class="category-content position-absolute bottom-0 p-5 text-uppercase">
                        <a href="{{ route('touring_vehicles') }}" class="text-white btn-link">CHOOSE</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <span class="d-block py-3 text-white text-uppercase fs-7 ls-1">04. Other vehicles</span>
                <div class="jarallax position-relative mb-3" style="height: 480px;">
                    <img src="images/Home/weddingCar.jpeg" alt="categories" class="jarallax-img img-fluid">
                    <div class="category-content position-absolute bottom-0 p-5 text-uppercase">
                        <a href="{{ route('other_vehicles') }}" class="text-white btn-link">CHOOSE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- <section class="newsletter bg-black">
    <div class="container-fluid">
      <div class="newsletter jarallax">
        <img src="images/ME/villa2.jpg" alt="newsletter" class="jarallax-img">
      
        <div class="row py-5 justify-content-center">
          <div class="col-md-6">
            <div class="row g-5 my-4 align-items-baseline">
              <div class="col-md-7">
                <h3 class="display-4 m-0 text-md-end">Join Our Newsletter</h3>
              </div>
              <div class="col-md-5">
                <p class="fs-6 text-gray">Sign Up for our newsletter and never miss any offers</p>
              </div>
            </div>
            <div class="row mb-5">
              <div class="col-md-12">
                <form id="form" class="d-flex flex-row gap-0">
                  <input type="text" name="email" placeholder="Your Email Addresss" class="form-control rounded-0 rounded-start">
                  <button class="btn btn-primary text-uppercase rounded-0 rounded-end px-5">Sign Up</button>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section> -->
  
  <footer id="footer" class="bg-black">
    <div class="container-fluid">
      <div class="row d-flex flex-wrap justify-content-between my-5 py-5">
        <div class="col-md-3 col-sm-6">
          <div class="footer-menu footer-menu-001">
            <div class="footer-intro mb-4">
              <a href="{{route('home')}}">
                <img src="images/LOGO/logoVB.png" alt="logo" width="150">
              </a>
            </div>
            <p>Villa Belgium is more than a B@B. We ensure that your stay is carefree. No stress, we will arrange everything for you.</p>
            <a href="{{route('login')}}" class="item-anchor">admin account</a>
            <div class="social-links">
              <ul class="list-unstyled d-flex flex-wrap gap-3">
                <li>
                  <a href="#" class="text-secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#facebook"></use></svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="text-secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#twitter"></use></svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="text-secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#youtube"></use></svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="text-secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#pinterest"></use></svg>
                  </a>
                </li>
                <li>
                  <a href="#" class="text-secondary">
                    <svg width="24" height="24" viewBox="0 0 24 24"><use xlink:href="#instagram"></use></svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="footer-menu footer-menu-002">
            <h5 class="widget-title mb-4">Quick Links</h5>
            <ul class="menu-list list-unstyled fs-6">
              
              <li class="menu-item">
                <a href="{{route('villas')}}" class="item-anchor">Villas</a>
              </li>
              <li class="menu-item">
                <a href="{{route('houses')}}" class="item-anchor">Rental houses</a>
              </li>
              <li class="menu-item">
                <a href="{{route('touring_vehicles')}}" class="item-anchor">Trip vehicles</a>
              </li>
              <li class="menu-item">
                <a href="{{route('other_vehicles')}}" class="item-anchor">Normal vehicles</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2 col-sm-6">
          <div class="footer-menu footer-menu-002">
            <h5 class="widget-title mb-4">About</h5>
            <ul class="menu-list list-unstyled fs-6">
              <li class="menu-item">
                <a href="{{route('home')}}" class="item-anchor">our services</a>
              </li>
              <li class="menu-item">
                <a href="#categories" class="item-anchor">Categories</a>
              </li>
           
            </ul>
          </div>
        </div>

        <div class="col-md-2 col-sm-6">
          <div class="footer-menu footer-menu-003">
            <h5 class="widget-title mb-4"> You can</h5>
            <ul class="menu-list list-unstyled fs-6">
              <li class="menu-item">
                <h6 class="item-anchor">rent a single room</h6>
              </li>
              <li class="menu-item">
                <h6  class="item-anchor">rent a ground floor</h6>
              </li>
              <li class="menu-item">
                <h6 class="item-anchor">rent the entire house with your own chef</h6>
              </li>
              <li class="menu-item">
                <h6 class="item-anchor">rent a car for your wedding,personal use,etc</h6>
              </li>
              <li class="menu-item">
                <h6 class="item-anchor">rent a car for your trip</h6>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footer-menu footer-menu-004 border-animation-left">
              <h5 class="widget-title mb-4">Contact Us</h5>
              <p>Do you have any questions or inquiries? send us an email at <br>
              <a href="mailto:kigalivillabelguim@gmail.com" class="item-anchor">kigalivillabelguim@gmail.com</a>
              </p>
              <p>for more clarifications, you can call us <br>
                  <a href="tel:Tel+250 787 988 546" class="item-anchor">Tel+250 787 988 546<br></a>
                  <a href="tel:Tel+250 792 108 699" class="item-anchor">Tel+250 792 108 699<br></a>People from europe, you can
                  use this WhatsApp <a href="tel:+32499330259" class="item-anchor">+32499330259<br></a>
              </p>
          </div>
      </div>


        <p>© Copyright 2024 VIlla Belgium. All rights reserved.</p>
      </div>
    </div>

    <div class="border-top py-4">
        
      </div>
    </div>
  </footer>
  <script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/modernizr.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="{{ asset('js/SmoothScroll.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script>
function openBookingModal(propertyId, status) {
    if (status === 'available') {
        const modalContent = `
            <form id="bookingForm" action="/book-property" method="POST">
                @csrf
                <input type="hidden" name="property_id" value="${propertyId}">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required>
                </div>
                <button type="submit" class="btn btn-primary">Confirm Booking</button>
            </form>
            <br>
            <a style="text-align:right;" class="btn btn-primary" href="{{route('other_vehicles')}}" class="item-anchor">Cancel</a> 
        `;
        
        // Set the modal content
        document.getElementById('bookingModalBody').innerHTML = modalContent;
        
        // Show the modal
        $('#bookingModal').modal('show');
    } else {
        // Property is not available for booking
        alert('Sorry this property is already taken, choose a different one');
    }
}


function submitBookingForm() {
    // Get form data
    const formData = $('#bookingForm').serialize();

    // Submit form data asynchronously using AJAX
    $.ajax({
        url: '/book-property',
        type: 'POST',
        data: formData,
        success: function(response) {
            // Show success message on the same page
            $('#bookingSuccessMessage').text(response.message);
            $('#bookingSuccessMessage').show();
            // Optionally, you can hide the modal here if needed
            $('#bookingModal').modal('hide');
        },
        error: function(xhr, status, error) {
            // Handle errors if any
            console.error(xhr.responseText);
        }
    });
}
</script>
</body>
</html>