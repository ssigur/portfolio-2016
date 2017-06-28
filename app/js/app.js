// ON LOAD
$(document).ready(function(){
    init();

    // Menu Navigation
    $('#trigger-nav').on('click', function () {
        $('html').toggleClass('hide-navigation').toggleClass('show-navigation');
    });

    // home Overlay
    $('.overlay button').on('click', function () {
        $('html').addClass('hide-overlay');
    });

    // Keybord Nav
    $(this).bind('keyup', function(e){
        switch(e.keyCode){
            case 37 :
                $('.projects-prev').click();
                break;

            case 39 :
                $('.projects-next').click();
                break;
        }
    });

});

var init = function() {
    // hide / display navigation & home overlay
    $('html').addClass('hide-navigation').removeClass('show-navigation', 'hide-overlay');

    // HOME NAVIGATION SLIDE PROJECTS
    var workList    = document.querySelector('.projects-list');
    var item        = document.querySelectorAll('.project-item');
    var nav         = document.querySelector('.projects-list-nav');
    var next        = document.querySelector('.projects-next');
    var prev        = document.querySelector('.projects-prev');


    function nextSlide() {
        $('li.turn-up').removeClass('turn-up'); // Remove TurnUp animation

        // Recalculates itemCount in case page has resized
        var itemCount = Math.round(workList.getBoundingClientRect().width / item[0].getBoundingClientRect().width);

        // Get integer for current value of transform property
        // Uses RegEx to get the right value
        var current_pull = item[0].style.transform.match(/-?[\d\.]+/g)[1];

        // Checks to see if the slider is at the end
        if(current_pull != (item.length - itemCount) * -100) {
            // Variable for a new value
            // which is the sum of where it
            // is now plus the step variable
            var new_pull = current_pull - 100;

            // Applies the new variable and rounds
            [].forEach.call(item, function(e) {
                e.style.transform = 'translate3d('+new_pull+'%,0,0)';
            });

            // Nav arrow show / hide
            if(new_pull != (item.length - itemCount) * -100){
                prev.style.visibility = 'visible';
            }else{
                next.style.visibility = 'hidden';
                prev.style.visibility = 'visible';
            }
        }
    }

    function prevSlide() {
        $('li.turn-up').removeClass('turn-up'); // Remove TurnUp animation

        // Get integer for current value of transform property
        // Uses RegEx to get the right value
        var current_pull = item[0].style.transform.match(/-?[\d\.]+/g)[1];

        // Checks if the transform is currently at 0
        // to tell if the slider has moved yet
        if(current_pull != 0) {
            // Variable for a new value
            // which is the sum of where it
            // is now plus the step variable
            var new_pull = parseInt(current_pull) + 100;

            // Applies the new variable and rounds
            [].forEach.call(item, function(e) {
                e.style.transform = 'translate3d('+new_pull+'%,0,0)';
            });

            // Nav arrow show / hide
            if(new_pull != 0){
                next.style.visibility = 'visible';
            }else{
                next.style.visibility = 'visible';
                prev.style.visibility = 'hidden';
            }
        }
    }

    if(workList) {

        // SWIPE
        $('.touchevents .projects-list').swipe({
            //Generic swipe handler for all directions
            swipeLeft: function () {
                nextSlide();
            },
            swipeRight: function () {
                prevSlide();
            },
            swipeUp: function () {
                $('html, body').animate({scrollTop: $(document).height()}, '100');
            },
            swipeDown: function () {
                $('html, body').animate({scrollTop: 0}, '100');
            },


            threshold: 80,
            allowPageScroll: "vertical",
            //By default the value of $.fn.swipe.defaults.excludedElements is "button, input, select, textarea, a, .noSwipe, "
            //To replace or clear the list, re set the excludedElements array.
            //To append to it, do the following (dont forget the proceeding comma) ...
            excludedElements: ""
        });

        // No swipe if under bp-small breakpoint (599)
        if(workList.getBoundingClientRect().width < 600){
            $('.touchevents .projects-list').swipe("disable");
        }

        // test orientation device
        window.onorientationchange = function() {
            if (workList.getBoundingClientRect().width > 599) {
                $('.touchevents .projects-list').swipe("enable");
            } else {
                $('.touchevents .projects-list').swipe("disable");
            }
        }
        // END SWIPE ---

        // Event MouseWheel
        $('.no-touchevents .projects-list').on('mousewheel', function(event) {
            if (workList.getBoundingClientRect().width > 599) {
                //console.log(event.deltaX, event.deltaY, event.deltaFactor);
                if(event.deltaX < 0){
                    prevSlide();
                }else{
                    nextSlide();
                }
            }
        });

        // Hide arrows if unnecessary
        if(workList.getBoundingClientRect().width == Math.round(item[0].getBoundingClientRect().width * item.length)) {
            nav.style.display = 'none';
        }

        [].forEach.call(item, function(e) {
            e.style.transform = 'translate3d(0,0,0)';
        });

        window.onresize = function() {
            [].forEach.call(item, function(e) {
                e.style.transform = 'translate3d(0%,0,0)';
            });

            // Hide arrows if unnecessary
            if(workList.getBoundingClientRect().width == Math.round(item[0].getBoundingClientRect().width * item.length)) {
                nav.style.display = 'none';
            } else {
                nav.style.display = 'block';
            }
        }

        // On NEXT button click
        next.addEventListener("click", function() {
            nextSlide();
        });


        // On PREVIOUS button click
        prev.addEventListener("click", function() {
            prevSlide();
        });
    }
    // END : HOME NAVIGATION SLIDE PROJECTS

    window.onscroll = function() {
        var pageHeight = window.innerHeight;
        var scrollProject = document.querySelector('.projects-item');

        if(scrollProject != null){
            if(window.pageYOffset > pageHeight / 4) {
                scrollProject.classList.add('hidden-scroll');
            } else {
                scrollProject.classList.remove('hidden-scroll');
            }
        }

    };
}



// SMOOTHSTATE
$(function(){
    'use strict';
    var $body    = $('html, body');
    var options = {
            prefetch: true,
            cacheLength: 2,

            onStart: {
                duration: 650, // Duration of our animation
                render: function ($container) {


                    // Add your CSS animation reversing class
                    $container.addClass('is-exiting');

                    // Add your CSS animation loading
                    $body.addClass('is-loading');

                    $body.animate({
                        scrollTop: 0
                    });

                    // Restart your animation
                    smoothState.restartCSSAnimations();
                }
            },

            onReady: {
                duration: 250,
                render: function ($container, $newContent) {

                    // Remove your CSS animation reversing class
                    $container.removeClass('is-exiting');

                    // Inject the new content
                    $container.html($newContent);
                },

            },

            onAfter: function($container) {

                init(); // projects nav

                // Remove your CSS animation reversing class
                $body.removeClass('is-loading');

                // home Overlay
                $('.overlay button').on('click', function () {
                    $('html').addClass('hide-overlay');
                });

                $('html').removeClass('hide-overlay');
                $(window).trigger('resize');

                ga('set', { 'page': document.location.pathname, 'title': document.title });
                ga('send', 'pageview');
            }
        },
        smoothState = $('#main').smoothState(options).data('smoothState');
});
