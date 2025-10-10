$(document).ready(function () {
  function toggleNavbar() {
    $("#site-header .navbar").toggleClass("d-none");
  }

  $(document).on("click", "#site-header .menu-btn", toggleNavbar);

  $(document).on("click", ".product .img-box", function () {
    // const productId = $(this).data('id');
    window.location.href = `/product-preview.php`;
  });
  $(".product-quantity").TouchSpin({
    min: 1,
    max: 99,
    step: 1,
    buttondown_class: "btn btn-decrease",
    buttonup_class: "btn btn-increase",
  });
});
