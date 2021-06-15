$(window).scroll(function() {
$('nav').toggleClass('scrolled', $(this).scrollTop()> 20);
});


$(window).scroll(function() {
$('nav').toggleClass('scrolledbtn', $(this).scrollTop()> 550);
});


$(document).ready(function(){
    $(".dropdown").hover(function(){
        var dropdownMenu = $(this).children(".dropdown-menu");
        if(dropdownMenu.is(":visible")){
            dropdownMenu.parent().toggleClass("open");
        }
    });
});



