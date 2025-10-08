<?php
include_once 'header.php';
?>

<!-- HERO SECTION -->
<section class="hero section-container">
  <div class="text-box">
    <h2 class="text-center heading">Buy, Sell, and Swap your Gadgets in one place.</h2>
    <p class="text-center subtext">Discover the best deals on phones and accessories — all in a trusted marketplace made for you.</p>
  </div>

  <!-- Search Bar -->
  <form class="search-form">
    <div class="search-bar position-relative p-0 m-0 overflow-hidden">
      <input type="text" class="form-control w-100 pe-5" placeholder="Search gadgets" />
      <button type="submit" class="position-absolute end-0 top-0 bottom-0 search-btn d-flex align-items-center justify-content-center">
        <span class="icon mb-1">
          <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="">
            <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z" />
          </svg>
        </span>
      </button>
    </div>
  </form>

  <!-- CTA -->
  <div class="cta mt-4">
    <a href="shop.php">
      <button class="cta-btn d-flex align-items-center gap-2">
        <span>Shop now</span>
        <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="">
            <path d="M646-440H200q-17 0-28.5-11.5T160-480q0-17 11.5-28.5T200-520h446L532-634q-12-12-11.5-28t11.5-28q12-12 28.5-12.5T589-691l183 183q6 6 8.5 13t2.5 15q0 8-2.5 15t-8.5 13L589-269q-12 12-28.5 11.5T532-270q-11-12-11.5-28t11.5-28l114-114Z" />
          </svg>
        </span>
      </button>
    </a>
    <p class="fs-6 cta-subscript"></p>
  </div>
</section>

<!-- GADGET BRANDS CAROUSEL -->
<section class="carousel"></section>

<!-- FEATURES/ABOUT -->
<section class="section-container features-section">
  <div class="text-box">
    <h2 class="text-center heading">Special offers made to serve your interest</h2>
  </div>
  <div class="card-container d-flex flex-column flex-md-row align-items-center gap-4 justify-content-between">
    <div class="card">
      <h6 class="heading">Buy</h6>
      <p>Feature one 1 paragraph says this.</p>
    </div>

    <div class="card">
      <h6 class="heading">Sell</h6>
      <p>Feature 2 paragraph says this.</p>
    </div>

    <div class="card">
      <h6 class="heading">Swap</h6>
      <p>Feature three paragraph says this.</p>
    </div>
  </div>
</section>

<!-- GADGETS SLIDESHOW SECTION -->
<section class="section-container product-slide-section">
  <div class="text-box">
    <h2 class="text-center heading">Browse our gadgets</h2>
  </div>

  <!-- Phones -->
  <div class="phone-section sub-section">
    <h6 class="heading">Phones & Tablets</h6>
    <div class="swiper phone-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide product">
          <div class="img-box position-relative">
            <img src="" alt="product image" />
            <span class="price-tag position-absolute">&#8358;1.4M</span>
          </div>
          <div class="text-container">
            <h6 class="product-name">iPhone 15 Pro Max</h6>
            <p class="description">1GB Memory Space, 12000 mAH</p>
            <footer class="">
              <button class="add-to-cart-btn w-100">Add to Cart</button>
            </footer>
          </div>
        </div>

        <div class="swiper-slide product">
          <div class="img-box position-relative">
            <img src="" alt="product image" />
            <span class="price-tag position-absolute">&#8358;1.4M</span>
          </div>
          <div class="text-container">
            <h6 class="product-name">iPhone 15 Pro Max</h6>
            <p class="description">1GB Memory Space, 12000 mAH</p>
            <footer class="">
              <button class="add-to-cart-btn w-100">Add to Cart</button>
            </footer>
          </div>
        </div>

        <div class="swiper-slide product">
          <div class="img-box position-relative">
            <img src="" alt="product image" />
            <span class="price-tag position-absolute">&#8358;1.4M</span>
          </div>
          <div class="text-container">
            <h6 class="product-name">iPhone 15 Pro Max</h6>
            <p class="description">1GB Memory Space, 12000 mAH</p>
            <footer class="">
              <button class="add-to-cart-btn w-100">Add to Cart</button>
            </footer>
          </div>
        </div>

        <div class="swiper-slide product">
          <div class="img-box position-relative">
            <img src="" alt="product image" />
            <span class="price-tag position-absolute">&#8358;1.4M</span>
          </div>
          <div class="text-container">
            <h6 class="product-name">iPhone 15 Pro Max</h6>
            <p class="description">1GB Memory Space, 12000 mAH</p>
            <footer class="">
              <button class="add-to-cart-btn w-100">Add to Cart</button>
            </footer>
          </div>
        </div>

        <div class="swiper-slide product">
          <div class="img-box position-relative">
            <img src="" alt="product image" />
            <span class="price-tag position-absolute">&#8358;1.4M</span>
          </div>
          <div class="text-container">
            <h6 class="product-name">iPhone 15 Pro Max</h6>
            <p class="description">1GB Memory Space, 12000 mAH</p>
            <footer class="">
              <button class="add-to-cart-btn w-100">Add to Cart</button>
            </footer>
          </div>
        </div>

        <div class="swiper-slide product">
          <div class="img-box position-relative">
            <img src="" alt="product image" />
            <span class="price-tag position-absolute">&#8358;1.4M</span>
          </div>
          <div class="text-container">
            <h6 class="product-name">iPhone 15 Pro Max</h6>
            <p class="description">1GB Memory Space, 12000 mAH</p>
            <footer class="">
              <button class="add-to-cart-btn w-100">Add to Cart</button>
            </footer>
          </div>
        </div>

        <div class="swiper-slide product">
          <div class="img-box position-relative">
            <img src="" alt="product image" />
            <span class="price-tag position-absolute">&#8358;1.4M</span>
          </div>
          <div class="text-container">
            <h6 class="product-name">iPhone 15 Pro Max</h6>
            <p class="description">1GB Memory Space, 12000 mAH</p>
            <footer class="">
              <button class="add-to-cart-btn w-100">Add to Cart</button>
            </footer>
          </div>
        </div>

        <div class="swiper-slide product">
          <div class="img-box position-relative">
            <img src="" alt="product image" />
            <span class="price-tag position-absolute">&#8358;1.4M</span>
          </div>
          <div class="text-container">
            <h6 class="product-name">iPhone 15 Pro Max</h6>
            <p class="description">1GB Memory Space, 12000 mAH</p>
            <footer class="">
              <button class="add-to-cart-btn w-100">Add to Cart</button>
            </footer>
          </div>
        </div>

        <div class="swiper-slide product">
          <div class="img-box position-relative">
            <img src="" alt="product image" />
            <span class="price-tag position-absolute">&#8358;1.4M</span>
          </div>
          <div class="text-container">
            <h6 class="product-name">iPhone 15 Pro Max</h6>
            <p class="description">1GB Memory Space, 12000 mAH</p>
            <footer class="">
              <button class="add-to-cart-btn w-100">Add to Cart</button>
            </footer>
          </div>
        </div>
      </div>

      <!-- Swiper navigation buttons -->
      <div class="swiper-button-next swiper-btn next"></div>
      <div class="swiper-button-prev swiper-btn prev"></div>
    </div>
  </div>

  <!-- Accessories -->
  <div class="accs-section sub-section">
    <h6 class="heading">Phone Accessories</h6>
    <div class="swiper accs-swiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide product">
          <div class="img-box position-relative">
            <img src="" alt="product image" />
            <span class="price-tag position-absolute">&#8358;20,000</span>
          </div>
          <div class="text-container">
            <h6 class="product-name">AirPod Pro</h6>
            <p class="description">x-value Latency, x-value Range</p>
            <footer class="">
              <button class="add-to-cart-btn w-100">Add to Cart</button>
            </footer>
          </div>
        </div>

        <div class="swiper-slide product">
          <div class="img-box position-relative">
            <img src="" alt="product image" />
            <span class="price-tag position-absolute">&#8358;20,000</span>
          </div>
          <div class="text-container">
            <h6 class="product-name">AirPod Pro</h6>
            <p class="description">x-value Latency, x-value Range</p>
            <footer class="">
              <button class="add-to-cart-btn w-100">Add to Cart</button>
            </footer>
          </div>
        </div>

        <div class="swiper-slide product">
          <div class="img-box position-relative">
            <img src="" alt="product image" />
            <span class="price-tag position-absolute">&#8358;20,000</span>
          </div>
          <div class="text-container">
            <h6 class="product-name">AirPod Pro</h6>
            <p class="description">x-value Latency, x-value Range</p>
            <footer class="">
              <button class="add-to-cart-btn w-100">Add to Cart</button>
            </footer>
          </div>
        </div>

        <div class="swiper-slide product">
          <div class="img-box position-relative">
            <img src="" alt="product image" />
            <span class="price-tag position-absolute">&#8358;20,000</span>
          </div>
          <div class="text-container">
            <h6 class="product-name">AirPod Pro</h6>
            <p class="description">x-value Latency, x-value Range</p>
            <footer class="">
              <button class="add-to-cart-btn w-100">Add to Cart</button>
            </footer>
          </div>
        </div>

        <div class="swiper-slide product">
          <div class="img-box position-relative">
            <img src="" alt="product image" />
            <span class="price-tag position-absolute">&#8358;20,000</span>
          </div>
          <div class="text-container">
            <h6 class="product-name">AirPod Pro</h6>
            <p class="description">x-value Latency, x-value Range</p>
            <footer class="">
              <button class="add-to-cart-btn w-100">Add to Cart</button>
            </footer>
          </div>
        </div>

        <div class="swiper-slide product">
          <div class="img-box position-relative">
            <img src="" alt="product image" />
            <span class="price-tag position-absolute">&#8358;20,000</span>
          </div>
          <div class="text-container">
            <h6 class="product-name">AirPod Pro</h6>
            <p class="description">x-value Latency, x-value Range</p>
            <footer class="">
              <button class="add-to-cart-btn w-100">Add to Cart</button>
            </footer>
          </div>
        </div>

        <div class="swiper-slide product">
          <div class="img-box position-relative">
            <img src="" alt="product image" />
            <span class="price-tag position-absolute">&#8358;20,000</span>
          </div>
          <div class="text-container">
            <h6 class="product-name">AirPod Pro</h6>
            <p class="description">x-value Latency, x-value Range</p>
            <footer class="">
              <button class="add-to-cart-btn w-100">Add to Cart</button>
            </footer>
          </div>
        </div>

        <div class="swiper-slide product">
          <div class="img-box position-relative">
            <img src="" alt="product image" />
            <span class="price-tag position-absolute">&#8358;20,000</span>
          </div>
          <div class="text-container">
            <h6 class="product-name">AirPod Pro</h6>
            <p class="description">x-value Latency, x-value Range</p>
            <footer class="">
              <button class="add-to-cart-btn w-100">Add to Cart</button>
            </footer>
          </div>
        </div>

        <div class="swiper-slide product">
          <div class="img-box position-relative">
            <img src="" alt="product image" />
            <span class="price-tag position-absolute">&#8358;20,000</span>
          </div>
          <div class="text-container">
            <h6 class="product-name">AirPod Pro</h6>
            <p class="description">x-value Latency, x-value Range</p>
            <footer class="">
              <button class="add-to-cart-btn w-100">Add to Cart</button>
            </footer>
          </div>
        </div>

        <!-- Add more .swiper-slide here -->
      </div>

      <!-- Swiper navigation buttons -->
      <div class="swiper-button-next swiper-btn next"></div>
      <div class="swiper-button-prev swiper-btn prev"></div>
    </div>
  </div>
</section>

<!-- SELL/SWAP SECTION -->
<section class="section-container slsw-section">
  <div class="text-box">
    <h2 class="text-center heading">Want to sell or swap your phones and gadgets?</h2>
    <p class="text-center subtext">Reach out to us through our Whatsapp handle with the pictures and description of your gadgets.</p>
  </div>
  <a href="" style="display: block; margin: auto; width: fit-content;">
    <button type="button" class="d-flex align-items-center gap-2 connect-btn">
      <span class="icon mb-1">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="17px" height="17px">
          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
        </svg>
      </span>
      <span>Connect on Whatsapp</span>
    </button>
  </a>
</section>

<section id="contact" class="section-container contact-section">

  <div class="d-md-flex gap-4 align-items-start">
    <div class="column w-100">
      <div class="text-box my-0 mx-auto m-md-0">
        <h2 class="heading text-center text-md-start">Contact Us</h2>
        <p class="subtext text-center text-md-start m-0">If you can't find what you're looking for or you want to make enquiries, send us a message through the Contact Form and we will respond within <span class="time-interval">48 hours.</span></p>
      </div>

      <div class="divider d-none d-md-flex align-items-center gap-2">
        <hr>
        <span>or</span>
        <hr>
      </div>

      <div class="contact-channels d-none d-md-block">
        <div class="call channel">
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="">
              <path d="M763-145q-121-9-229.5-59.5T339-341q-86-86-135.5-194T144-764q-2-21 12.29-36.5Q170.57-816 192-816h136q17 0 29.5 10.5T374-779l24 106q2 13-1.5 25T385-628l-97 98q20 38 46 73t57.97 65.98Q422-361 456-335.5q34 25.5 72 45.5l99-96q8-8 20-11.5t25-1.5l107 23q17 5 27 17.5t10 29.5v136q0 21.43-16 35.71Q784-143 763-145ZM255-600l70-70-17.16-74H218q5 38 14 73.5t23 70.5Zm344 344q35.1 14.24 71.55 22.62Q707-225 744-220v-90l-75-16-70 70ZM255-600Zm344 344Z" />
            </svg>
          </span>
          <a href="tel:+2347067381950">+234 706 7381 950</a>
        </div>

        <div class="email channel">
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="">
              <path d="M168-192q-29.7 0-50.85-21.16Q96-234.32 96-264.04v-432.24Q96-726 117.15-747T168-768h624q29.7 0 50.85 21.16Q864-725.68 864-695.96v432.24Q864-234 842.85-213T792-192H168Zm312-240L168-611v347h624v-347L480-432Zm0-85 312-179H168l312 179Zm-312-94v-85 432-347Z" />
            </svg>
          </span>
          <a href="mailto:email@example.com">email@example.com</a>
        </div>

        <div class="office channel">
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="">
              <path d="M480.21-480Q510-480 531-501.21t21-51Q552-582 530.79-603t-51-21Q450-624 429-602.79t-21 51Q408-522 429.21-501t51 21ZM480-191q119-107 179.5-197T720-549q0-105-68.5-174T480-792q-103 0-171.5 69T240-549q0 71 60.5 161T480-191Zm0 95Q323.03-227.11 245.51-339.55 168-452 168-549q0-134 89-224.5T479.5-864q133.5 0 223 90.5T792-549q0 97-77 209T480-96Zm0-456Z" />
            </svg>
          </span>
          <p class="p-0 m-0">Blackii's Gadgets Store, Futo Road, Eziobodo, Imo, Nigeria</p>
        </div>
      </div>
    </div>

    <div class="column w-100">
      <form class="contact-form mt-4 mt-md-3">
        <div class="form-group">
          <label for="email">Your email:</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="form-group">
          <label for="message">Your message:</label>
          <textarea name="message" id="message" class="form-control" required></textarea>
        </div>

        <button type="submit">Send message</button>
      </form>

      <div class="divider d-flex align-items-center gap-2 d-md-none">
        <hr>
        <span>or</span>
        <hr>
      </div>

      <div class="contact-channels d-md-none">
        <div class="call channel">
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="http://-960 960" width="20px" fill="">
              <path d="M763-145q-121-9-229.5-59.5T339-341q-86-86-135.5-194T144-764q-2-21 12.29-36.5Q170.57-816 192-816h136q17 0 29.5 10.5T374-779l24 106q2 13-1.5 25T385-628l-97 98q20 38 46 73t57.97 65.98Q422-361 456-335.5q34 25.5 72 45.5l99-96q8-8 20-11.5t25-1.5l107 23q17 5 27 17.5t10 29.5v136q0 21.43-16 35.71Q784-143 763-145ZM255-600l70-70-17.16-74H218q5 38 14 73.5t23 70.5Zm344 344q35.1 14.24 71.55 22.62Q707-225 744-220v-90l-75-16-70 70ZM255-600Zm344 344Z" />
            </svg>
          </span>
          <a href="tel:+2347067381950">+234 706 7381 950</a>
        </div>

        <div class="email channel">
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="http://-960 960" width="20px" fill="">
              <path d="M168-192q-29.7 0-50.85-21.16Q96-234.32 96-264.04v-432.24Q96-726 117.15-747T168-768h624q29.7 0 50.85 21.16Q864-725.68 864-695.96v432.24Q864-234 842.85-213T792-192H168Zm312-240L168-611v347h624v-347L480-432Zm0-85 312-179H168l312 179Zm-312-94v-85 432-347Z" />
            </svg>
          </span>
          <a href="mailto:email@example.com">email@example.com</a>
        </div>

        <div class="office channel">
          <span class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="http://-960 960" width="20px" fill="">
              <path d="M480.21-480Q510-480 531-501.21t21-51Q552-582 530.79-603t-51-21Q450-624 429-602.79t-21 51Q408-522 429.21-501t51 21ZM480-191q119-107 179.5-197T720-549q0-105-68.5-174T480-792q-103 0-171.5 69T240-549q0 71 60.5 161T480-191Zm0 95Q323.03-227.11 245.51-339.55 168-452 168-549q0-134 89-224.5T479.5-864q133.5 0 223 90.5T792-549q0 97-77 209T480-96Zm0-456Z" />
            </svg>
          </span>
          <p class="p-0 m-0">Blackii's Gadgets Store, Futo Road, Eziobodo, Imo, Nigeria</p>
        </div>
      </div>
    </div>
  </div>
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.5058702950976!2d3.421991274995629!3d6.428055993557722!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4bc2d1e19b3%3A0xb3a4a5632b9e7e9!2s45%20Adeola%20Odeku%20St%2C%20Victoria%20Island%2C%20Lagos!5e0!3m2!1sen!2sng!4v1727889548965!5m2!1sen!2sng"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"
    class="address-map">
  </iframe>
  <p class="text-center find-us">Find us here</p>

</section>

<?php
include 'footer.php';
?>