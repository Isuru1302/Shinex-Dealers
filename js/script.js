$(".go_to_contacts").click(function() {
    $('html,body').animate({
        scrollTop: $("#site_Details").offset().top},
        'slow');
});

