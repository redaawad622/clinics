$("html").niceScroll({cursorwidth: "5px"});

$('.edu-tap').click(function () {
   $(this).addClass('active') ;
   $('#edu').show();
   $('.clinic-tap').removeClass('active');
   $('#clinic-info').hide();
    $('#booking').hide();
    $('.booking-tap').removeClass('active');

});
$('.clinic-tap').click(function () {
   $(this).addClass('active') ;
   $('#clinic-info').show();
   $('.edu-tap').removeClass('active');
   $('.booking-tap').removeClass('active');
   $('#edu').hide();
   $('#booking').hide();
});
$('.booking-tap').click(function () {
    $(this).addClass('active') ;
    $('#booking').show();
    $('.edu-tap').removeClass('active');
    $('.clinic-tap').removeClass('active');
    $('#edu').hide();
    $('#clinic-info').hide();
});

$('.radio-phone').click(function () {
   $('.input-phone').toggle();
});
$('.radio-email').click(function () {
   $('.input-email').toggle();
});
$('.pay-online').click(function () {
   $('.pay').show();
});
$('.pay-cash').click(function () {
   $('.pay').hide();
});
$('.exp-img1').hover(function () {
   $('.exp-icon1').toggle();
});
$('.exp-img2').hover(function () {
   $('.exp-icon2').toggle();
});
$('.exp-img3').hover(function () {
   $('.exp-icon3').toggle();
});
$('#edit_mode').click(function () {
    $('#edit_mode').hide();
   $('.inp').show();
   $('.p_hide').hide();
   $('#edit_mode_cancel').show();
});
$('#edit_mode_cancel').click(function () {
   $('.inp').hide();
   $('.p_hide').show();
   $('#edit_mode').show();
    $('#edit_mode_cancel').hide();
});

$('#pic_btn').click(function () {
   $('#pic_input').click();
});
$('#pic_ch').click(function () {
   $('#ed_sub').click();
});
