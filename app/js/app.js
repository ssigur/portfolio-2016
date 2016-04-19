// ON LOAD
$(document).ready(function(){
    init();

    // Menu Navigation
    $('#trigger-nav').on('click', function () {
        $('html').toggleClass('hide-navigation').toggleClass('show-navigation');
    });

    // home Overlay
    $('.home .overlay button').on('click', function () {
        $('html').addClass('hide-overlay');
    });





});


var init = function() {
    // hide / display navigation & home overlay
    $('html').addClass('hide-navigation').removeClass('show-navigation', 'hide-overlay');

    // HOME NAVIGATION SLIDE PROJECTS
    var workContainer  = document.querySelector('.projects-list');
    var post           = document.querySelectorAll('.project-item');
    var next           = document.querySelector('.projects-next');
    var prev           = document.querySelector('.projects-prev');
    var nav           = document.querySelector('.projects-list-nav');

    function nextSlide() {
        // Recalculates postCount in case page has resized
        var postCount = Math.round(workContainer.getBoundingClientRect().width / post[0].getBoundingClientRect().width);

        // Get integer for current value of transform property
        // Uses RegEx to get the right value
        var current_pull = post[0].style.transform.match(/-?[\d\.]+/g)[1];

        // Checks to see if the slider is at the end
        if(current_pull != (post.length - postCount) * -100) {
            // Variable for a new value
            // which is the sum of where it
            // is now plus the step variable
            var new_pull = current_pull - 100;

            // Applies the new variable and rounds
            [].forEach.call(post, function(e) {
                e.style.transform = 'translate3d('+new_pull+'%,0,0)';
            });
        }
    }

    function prevSlide() {
        // Get integer for current value of transform property
        // Uses RegEx to get the right value
        var current_pull = post[0].style.transform.match(/-?[\d\.]+/g)[1];

        // Checks if the transform is currently at 0
        // to tell if the slider has moved yet
        if(current_pull != 0) {
            // Variable for a new value
            // which is the sum of where it
            // is now plus the step variable
            var new_pull = parseInt(current_pull) + 100;

            // Applies the new variable and rounds
            [].forEach.call(post, function(e) {
                e.style.transform = 'translate3d('+new_pull+'%,0,0)';
            });
        }
    }

    if(workContainer) {
        console.log('worKContainer test');
        // Hide arrows if unnecessary
        if(workContainer.getBoundingClientRect().width == post[0].getBoundingClientRect().width * post.length) {
            nav.style.display = 'none';
            console.log('worKContainer display none');
        }

        var postCount = workContainer.getBoundingClientRect().width / post[0].getBoundingClientRect().width;

        [].forEach.call(post, function(e) {
            e.style.transform = 'translate3d(0,0,0)';
        });

        window.onresize = function() {
            // Hide arrows if unnecessary
            if(workContainer.getBoundingClientRect().width == post[0].getBoundingClientRect().width * post.length) {
                nav.style.display = 'none';
            } else {
                nav.style.display = 'block';
            }

            [].forEach.call(post, function(e) {
                e.style.transform = 'translate3d(0%,0,0)';
            });
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

}

$(function(){
    'use strict';
    var $body    = $('html, body');
    var options = {
            prefetch: true,
            cacheLength: 2,

            onStart: {
                duration: 650, // Duration of our animation
                render: function ($container) {

                    init();

                    // Add your CSS animation reversing class
                    $container.addClass('is-exiting');

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
                $('html').removeClass('hide-overlay');

                //ga('set', { 'page': document.location.pathname, 'title': document.title });
                //ga('send', 'pageview');
            }
        },
        smoothState = $('#main').smoothState(options).data('smoothState');
});