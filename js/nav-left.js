jQuery("document").ready(function($){   var nav = $('.menulateral');   
$(window).scroll(function () { if ($(this).scrollTop() > 486) { 
nav.addClass("show-menu"); } else { nav.removeClass("show-menu"); } });   });