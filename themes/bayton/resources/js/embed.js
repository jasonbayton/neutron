$(function() {
  resize_yuutuub();
});

var resysemey;
$(window).resize(function() {
    clearTimeout(resysemey);
    id = setTimeout(resize_yuutuub, 100);
    
});

function resize_yuutuub() {
  $('.embed-youtube').find('iframe').each(function() {
    var width = $(this).width();
    var width_new = $('.embed-youtube').width();
    var resize_ratio = width_new / width;

    var height = $(this).height();
    var height_new = height * resize_ratio;

    $(this).width(width_new);
    $(this).height(height_new);
  });
}
