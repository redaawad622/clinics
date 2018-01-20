$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:2,
            nav:false
        },
        991:{
            items:3,
            nav:true,
            loop:false
        },
        1200:{
            items:4,
            nav:true,
            loop:false
        }
    }
});

$("html").niceScroll({
     cursorwidth: "12px"
 });
/*
$(window).load(function () {
    $("body").css("overflow", "auto");
    $(".overlo").fadeOut(1000, function ()
    {
        $(this).fadeOut(1000,function () {

            $(this).remove();
        });

    });

});
*/

/*register*/

$('#btn2').click(function () {
   $('#btn2').addClass('active');
   $('#btn1').removeClass('active');
   $('#btn3').removeClass('active');
   $('#doctor').show();
   $('#patient').hide();
   $('#advertiser').hide();

});
$('#btn1').click(function () {
   $('#btn1').addClass('active');
   $('#btn2').removeClass('active');
    $('#btn3').removeClass('active')
    $('#doctor').hide();
    $('#patient').show();
    $('#advertiser').hide();


});
$('#btn3').click(function () {
   $('#btn3').addClass('active');
   $('#btn2').removeClass('active');
    $('#btn1').removeClass('active')
    $('#doctor').hide();
    $('#patient').hide();
    $('#advertiser').show();


});

/*login model*/

$('.log-in').click(function () {
   $('.main-login').show();
});

$('#login-close').click(function () {
   $('.main-login').hide();
});

/*dept js*/
