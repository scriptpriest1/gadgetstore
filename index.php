<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blackiis Gadgets</title>
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
</head>

<body>

  <div class="container-fluid">

    <!-- SITE HEADER -->
    <header id="site-header" class="p-0 m-0 d-flex align-items-center gap-3 justify-content-between">
      <div class="site-id">
        <a href="">
          <h1 class="fs-5 m-0 p-0" style="width: fit-content;">Blackiis Gadgets</h1>
        </a>
      </div>

      <nav class="navbar p-0 m-0">
        <ul class="d-flex align-items-center gap-4 p-0 m-0">
          <li><a href="">FAQ</a></li>
          <li><a href="">Contact Us</a></li>
          <li class="d-md-none"><a href="" class="btn">Shop now</a></li>
        </ul>
      </nav>

      <!-- Utils bar -->
      <div class="utils-bar d-flex align-items-center gap-3">
        <!-- <div class="search-bar d-flex align-items-center gap-2">
          <input type="text" class="form-control" placeholder="Search phones and accessories" />
          <button type="submit">Go</button>
        </div> -->

        <nav class="d-flex align-items-center gap-3">
          <a href="" class="">Cart</a>
          <a href="" class="btn cta-btn m-0">Shop now</a>
        </nav>
      </div>
    </header>

    <!-- HERO SECTION -->
    <section class="hero section-container">
      <div class="text-box">
        <h2 class="text-center fs-1">One place, for all Mobile Gadgets.</h2>
        <p class="text-center">Get all your phones, tablets and gadget accessories in one place.</p>
      </div>

      <!-- Search Bar -->
      <form class="search-form">
        <div class="search-bar position-relative p-0 m-0 overflow-hidden">
          <input type="text" class="form-control w-100 pe-5" placeholder="Search gadgets" />
          <button type="submit" class="position-absolute end-0 top-0 bottom-0 search-btn">Go</button>
        </div>
      </form>

      <!-- CTA -->
      <div class="cta mt-4">
        <button class="cta-btn">Shop now</button>
        <p class="fs-6 cta-subscript"></p>
      </div>
    </section>

    <!-- GADGET BRANDS CAROUSEL -->
    <section class="carousel"></section>

    <!-- FEATURES/ABOUT -->
    <section class="section-container features-section">
      <div class="text-box">
        <h2 class="text-center">Irreplaceable offerings for our customers</h2>
      </div>
      <div class="card-container d-flex align-items-center gap-4 justify-content-between">
        <div class="card">
          <h6 class="heading">Ft. 1</h6>
          <p>Feature one 1 paragraph says this.</p>
        </div>

        <div class="card">
          <h6 class="heading">Feature 2</h6>
          <p>Feature 2 paragraph says this.</p>
        </div>

        <div class="card">
          <h6 class="heading">Feat 3</h6>
          <p>Feature three paragraph says this.</p>
        </div>
      </div>
    </section>

    <!-- GADGETS SLIDESHOW SECTION -->
    <section class="section-container gadget-slide-section">
      <div class="text-box">
        <h2 class="text-center">Browse our Gadgets</h2>
      </div>
      <!-- Phones -->
      <div class="phone-section sub-section">
        <h6 class="heading">Phones & Tablets</h6>
        <div class="slider">
          <div class="card gadget">
            <div class="img-box position-relative">
              <img src="" alt="Gadget image" srcset="">
              <span class="price-tag position-absolute">&#8358;1.4M</span>
            </div>
            <div class="text-container">
              <h6 class="gadget-name">iPhone 15 Pro Max</h6>
              <p class="description">1GB Memory Space, 12000 mAH</p>
            </div>
          </div>

          <div class="card gadget">
            <div class="img-box position-relative">
              <img src="" alt="Gadget image" srcset="">
              <span class="price-tag position-absolute">&#8358;1.4M</span>
            </div>
            <div class="text-container">
              <h6 class="gadget-name">iPhone 15 Pro Max</h6>
              <p class="description">1GB Memory Space, 12000 mAH</p>
            </div>
          </div>

          <div class="card gadget">
            <div class="img-box position-relative">
              <img src="" alt="Gadget image" srcset="">
              <span class="price-tag position-absolute">&#8358;1.4M</span>
            </div>
            <div class="text-container">
              <h6 class="gadget-name">iPhone 15 Pro Max</h6>
              <p class="description">1GB Memory Space, 12000 mAH</p>
            </div>
          </div>

          <div class="card gadget">
            <div class="img-box position-relative">
              <img src="" alt="Gadget image" srcset="">
              <span class="price-tag position-absolute">&#8358;1.4M</span>
            </div>
            <div class="text-container">
              <h6 class="gadget-name">iPhone 15 Pro Max</h6>
              <p class="description">1GB Memory Space, 12000 mAH</p>
            </div>
          </div>

          <div class="card gadget">
            <div class="img-box position-relative">
              <img src="" alt="Gadget image" srcset="">
              <span class="price-tag position-absolute">&#8358;1.4M</span>
            </div>
            <div class="text-container">
              <h6 class="gadget-name">iPhone 15 Pro Max</h6>
              <p class="description">1GB Memory Space, 12000 mAH</p>
            </div>
          </div>

        </div>
      </div>

      <!-- Accessories -->
      <div class="accs-section sub-section">
        <h6 class="heading">Phone Accessories</h6>
        <div class="slider">
          <div class="card gadget">
            <div class="img-box position-relative">
              <img src="" alt="Gadget image" srcset="">
              <span class="price-tag position-absolute">&#8358;20,000</span>
            </div>
            <div class="text-container">
              <h6 class="gadget-name">AirPod Pro</h6>
              <p class="description">x-value Lantency, x-value Range</p>
            </div>
          </div>

          <div class="card gadget">
            <div class="img-box position-relative">
              <img src="" alt="Gadget image" srcset="">
              <span class="price-tag position-absolute">&#8358;20,000</span>
            </div>
            <div class="text-container">
              <h6 class="gadget-name">AirPod Pro</h6>
              <p class="description">x-value Lantency, x-value Range</p>
            </div>
          </div>

          <div class="card gadget">
            <div class="img-box position-relative">
              <img src="" alt="Gadget image" srcset="">
              <span class="price-tag position-absolute">&#8358;20,000</span>
            </div>
            <div class="text-container">
              <h6 class="gadget-name">AirPod Pro</h6>
              <p class="description">x-value Lantency, x-value Range</p>
            </div>
          </div>

          <div class="card gadget">
            <div class="img-box position-relative">
              <img src="" alt="Gadget image" srcset="">
              <span class="price-tag position-absolute">&#8358;20,000</span>
            </div>
            <div class="text-container">
              <h6 class="gadget-name">AirPod Pro</h6>
              <p class="description">x-value Lantency, x-value Range</p>
            </div>
          </div>

          <div class="card gadget">
            <div class="img-box position-relative">
              <img src="" alt="Gadget image" srcset="">
              <span class="price-tag position-absolute">&#8358;20,000</span>
            </div>
            <div class="text-container">
              <h6 class="gadget-name">AirPod Pro</h6>
              <p class="description">x-value Lantency, x-value Range</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

  <!-- Bootstrap CDN Bundle JS (includes Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- jQuery CDN-->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <!-- Custom JS File-->
  <script src="script.js"></script>

</body>

</html>

</html>