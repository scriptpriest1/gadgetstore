<?php
include_once 'header.php';
?>

<section class="section-container product-preview-section">
  <div class="product-preview-container row">
    <div class="image-container col-12 col-md-4 overflow-hidden mb-4" style="height: 400px;">
      <div class="img-box w-100 h-100 bg-light">
        <img src="assets/images/phone1.jpg" alt="Product Image" class="img-fluid" />
      </div>
    </div>
    <div class="details-container col-12 col-md-8">
      <h3 class="product-title mb-3">iPhone 15 Pro Max</h3>
      <p class="product-description mb-3"><strong>Speciications: </strong> <span class="specs">Apple iPhone 15 Pro Max, 6.7-inch Super Retina XDR display, A17 Pro chip with 6-core GPU, iOS 17, 8GB RAM, storage options: 256GB / 512GB / 1TB, triple 48MP + 12MP + 12MP rear cameras, 12MP front camera, 4K video recording, 5G connectivity, Wi-Fi 6E, Bluetooth 5.3, USB-C port, Face ID, Titanium frame, Ceramic Shield front, IP68 water and dust resistance, 4422mAh battery, fast charging, MagSafe wireless charging.</span>
      </p>
      <p class="product-price mb-3"><strong>Price: </strong>&#8358;<span>1,400,000.00</span></p>
      <div class="product-quantity mb-3 d-flex align-items-center gap-2">
        <strong>Quantity: </strong>
        <input class="product-quantity px-2 border-0 text-center" type="number" value="1" min="1" max="99" step="1" name="quantity" title="Cannot exceed 99" style="flex: none !important; width: auto !important;" />
      </div>
      <div class="btn-group d-flex flex-column flex-md-row gap-3 align-items-center mt-4">
        <button class="add-to-cart-btn d-flex align-items-center justify-content-center gap-2">
          <span class="icon mb-1">
            <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="">
              <path d="M444-576v-132H312v-72h132v-132h72v132h132v72H516v132h-72ZM263.79-96Q234-96 213-117.21t-21-51Q192-198 213.21-219t51-21Q294-240 315-218.79t21 51Q336-138 314.79-117t-51 21Zm432 0Q666-96 645-117.21t-21-51Q624-198 645.21-219t51-21Q726-240 747-218.79t21 51Q768-138 746.79-117t-51 21ZM48-792v-72h133l155 360h301l113-264h78L703-476q-9 20-26.5 32T637-432H317l-42 72h493v72H276q-42 0-63-36.5t0-71.5l52-90-131-306H48Z" />
            </svg>
          </span>
          <span>Add to Cart</span>
        </button>
        <button class="order-btn d-flex align-items-center justify-content-center gap-2">
          <span class="icon mb-1">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="17px" height="17px">
              <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" />
            </svg>
          </span>
          <span>Order Now on Whatsapp</span>
        </button>
      </div>
    </div>
  </div>
</section>

<?php
include_once 'footer.php';
?>