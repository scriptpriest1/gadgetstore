$(document).ready(function () {
  function toggleNavbar() {
    $('#site-header .navbar').toggleClass('d-none');
  }

  $(document).on('click', '#site-header .menu-btn', toggleNavbar);
})