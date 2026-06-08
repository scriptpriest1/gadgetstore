<?php
define('BASE_URL', 'http://blackiisgadgets.localhost/');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blackii's Gadgets</title>
  <meta name="description" content="A one-stop shop for the latest gadgets and electronics">
  <meta name="keywords" content="gadgets, electronics, tech store, latest gadgets">
  <meta name="author" content="Gadget Store">
  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Space+Grotesk:wght@300..700&display=swap"
    rel="stylesheet" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="styles.css">
  <!-- Favicon -->
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <!-- Swiper JS Bootsrap -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <!-- Bootstrap TouchSpin CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.3.0/jquery.bootstrap-touchspin.min.css">
</head>

<body>

  <div class="container-fluid position-relative">

    <!-- SITE HEADER -->
    <header id="site-header" class="row p-0 m-0 justify-content-between">
      <div class="site-id col-md-4 col-6 d-flex align-items-center gap-2 p-0">
        <a href="<?= BASE_URL ?>" class="nav-link">
          <h1 class="fs-5 m-0 p-0 fw-bold d-none d-md-block" style="width: fit-content;">Blackii's Gadgets</h1>
          <h1 class="fs-5 m-0 p-0 fw-bold d-md-none" style="width: fit-content;">BG</h1>
        </a>
      </div>

      <nav class="navbar p-0 m-0 col-md-4 p-0 d-none d-md-flex">
        <button class="menu-btn d-md-none m-0 p-0 mb-3 ms-auto bg-transparent">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="">
            <path d="M480-424 284-228q-11 11-28 11t-28-11q-11-11-11-28t11-28l196-196-196-196q-11-11-11-28t11-28q11-11 28-11t28 11l196 196 196-196q11-11 28-11t28 11q11 11 11 28t-11 28L536-480l196 196q11 11 11 28t-11 28q-11 11-28 11t-28-11L480-424Z" />
          </svg>
        </button>
        <ul class="d-flex flex-column flex-md-row align-items-center gap-4 p-0 m-auto">
          <li><a href="<?= BASE_URL ?>#faq" class="nav-link">FAQ</a></li>
          <li><a href="<?= BASE_URL ?>#contact" class="nav-link">Contact Us</a></li>
          <li class="d-md-none mt-2">
            <a href="shop.php" class="shop-now-link nav-link">
              <button class="cta-btn">
                <span>Shop now</span>
                <span class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="">
                    <path d="M646-440H200q-17 0-28.5-11.5T160-480q0-17 11.5-28.5T200-520h446L532-634q-12-12-11.5-28t11.5-28q12-12 28.5-12.5T589-691l183 183q6 6 8.5 13t2.5 15q0 8-2.5 15t-8.5 13L589-269q-12 12-28.5 11.5T532-270q-11-12-11.5-28t11.5-28l114-114Z" />
                  </svg>
                </span>
              </button>
            </a>
          </li>
        </ul>
      </nav>

      <!-- Utils bar -->
      <div class="utils-bar d-flex align-items-center gap-3 col-md-4 col-6 p-0">
        <!-- <div class="search-bar d-flex align-items-center gap-2">
          <input type="text" class="form-control" placeholder="Search phones and accessories" />
          <button type="submit">Go</button>
        </div> -->

        <nav class="d-flex align-items-center gap-3 ms-auto">
          <a href="" class="nav-link">Cart</a>
          <a href="shop.php" class="nav-link d-none d-md-block">
            <button class="cta-btn m-0 d-flex align-items-center gap-2">
              <span>Shop now</span>
              <span class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="">
                  <path d="M646-440H200q-17 0-28.5-11.5T160-480q0-17 11.5-28.5T200-520h446L532-634q-12-12-11.5-28t11.5-28q12-12 28.5-12.5T589-691l183 183q6 6 8.5 13t2.5 15q0 8-2.5 15t-8.5 13L589-269q-12 12-28.5 11.5T532-270q-11-12-11.5-28t11.5-28l114-114Z" />
                </svg>
              </span>
            </button>
          </a>
          <button class="menu-btn d-md-none p-0 m-0 bg-transparent">
            <span class="icon">
              <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="">
                <path d="M160-240q-17 0-28.5-11.5T120-280q0-17 11.5-28.5T160-320h640q17 0 28.5 11.5T840-280q0 17-11.5 28.5T800-240H160Zm0-200q-17 0-28.5-11.5T120-480q0-17 11.5-28.5T160-520h640q17 0 28.5 11.5T840-480q0 17-11.5 28.5T800-440H160Zm0-200q-17 0-28.5-11.5T120-680q0-17 11.5-28.5T160-720h640q17 0 28.5 11.5T840-680q0 17-11.5 28.5T800-640H160Z" />
              </svg>
            </span>
          </button>
        </nav>
      </div>
    </header>