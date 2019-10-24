$(document).ready(function() {
    $('#open').on('click', function() {
        $('#popup').fadeIn('slow');
        $('.popup-overlay').fadeIn('slow');
        $('.popup-overlay').height($(window).height());
        return false;
    });

    $('#close').on('click', function() {
        $('#popup').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        return false;
    });
});

$(document).ready(function() {
    $('#open2').on('click', function() {
        $('#popup2').fadeIn('slow');
        $('.popup-overlay2').fadeIn('slow');
        $('.popup-overlay2').height($(window).height());
        return false;
    });

    $('#close2').on('click', function() {
        $('#popup2').fadeOut('slow');
        $('.popup-overlay2').fadeOut('slow');
        return false;
    });
});

$(document).ready(function() {
    $('#open3').on('click', function() {
        $('#popup3').fadeIn('slow');
        $('.popup-overlay3').fadeIn('slow');
        $('.popup-overlay3').height($(window).height());
        return false;
    });

    $('#close3').on('click', function() {
        $('#popup3').fadeOut('slow');
        $('.popup-overlay3').fadeOut('slow');
        return false;
    });
});