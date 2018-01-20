$('.left').css('height',screen.height);


$("html").niceScroll({
    cursorwidth: "6px"
});

$('#pic').click(function () {
   $('#pic').addClass('active-li');
   $('#user').removeClass('active-li');
   $('#dept').removeClass('active-li');
   $('.carousel-img').show();
   $('.All-users').hide();
   $('.department').hide();
});
$('#user').click(function () {
   $('#user').addClass('active-li');
   $('#pic').removeClass('active-li');
    $('#dept').removeClass('active-li');

    $('.carousel-img').hide();
   $('.All-users').show();
    $('.department').hide();

});
$('#dept').click(function () {
   $('#dept').addClass('active-li');
    $('#user').removeClass('active-li');

    $('#pic').removeClass('active-li');
   $('.carousel-img').hide();
   $('.All-users').hide();
   $('.department').show();
});

$('.active').click(function () {
    $('.left').addClass('active-left');
    $('.right').addClass('active-right');
    $('.left ul i').addClass('active-left-i');
    $('.left ul a').addClass('active-left-a');
    $('.left span').addClass('left-span');
    $('.title').hide();
    $('.active').hide();
    $('.passive').show();

});
$('.passive').click(function () {
    $('.left').removeClass('active-left');
    $('.right').removeClass('active-right');
    $('.left ul i').removeClass('active-left-i');
    $('.left ul a').removeClass('active-left-a');
    $('.left span').removeClass('left-span');

    $('.title').show();

    $('.active').show();
    $('.passive').hide();
});

