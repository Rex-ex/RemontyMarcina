$(document).ready(function() {
  const hamburger = $('.hamburger');
  const menuContainter = $('.menuMobileContainer');
  const menuLI = $(".menuMobileContainer ul li");
  $(hamburger).click(function(){
      hamburger.toggleClass('is-active');
      menuContainter.toggle();

  });
  $(menuLI).click(function(){
      hamburger.toggleClass('is-active');
      menuContainter.toggle();
  });
});
