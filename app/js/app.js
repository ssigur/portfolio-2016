// ON LOAD
$(document).ready(function(){

    // Menu Navigation
    $('#trigger-nav').on('click', function () {
        $('html').toggleClass('hide-navigation').toggleClass('show-navigation');
    });

    // home Overlay
    $('.home .overlay').on('click', function () {
        $('html').addClass('hide-overlay');
    });

});


