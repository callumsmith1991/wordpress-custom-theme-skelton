"use strict";

jQuery(document).ready(function ($) {
  $('#toggleMenu').click(function () {
    $('#mobileMenu .menu').slideToggle();
  });
  $(".menu-item").click(function (event) {
    if (event.target !== this) return;
    $(this).find(".sub-menu:first").slideToggle(function () {});
  });
});