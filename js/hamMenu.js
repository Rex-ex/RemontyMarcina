$(document).ready(function() {
  const hamburger = $('.hamburger');
  const menuContainter = $('.menuContainer');
  const menuLI = $(".menuContainer ul li");
  $(hamburger).click(function(){
      hamburger.toggleClass('is-active');
      menuContainter.toggle();

  });
  $(menuLI).click(function(){
      hamburger.toggleClass('is-active');
      menuContainter.toggle();
  });
});
