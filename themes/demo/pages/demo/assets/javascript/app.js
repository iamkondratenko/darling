/*
 * Application
 */

$(document).tooltip({
    selector: "[data-toggle=tooltip]"
})

/*
 * Auto hide navbar
 */
jQuery(document).ready(function($){
    
    var $header = $('.navbar-autohide'),
        scrolling = false,
        previousTop = 0,
        currentTop = 0,
        scrollDelta = 10,
        scrollOffset = 150

    $(window).on('scroll', function(){
        if (!scrolling) {
            scrolling = true

            if (!window.requestAnimationFrame) {
                setTimeout(autoHideHeader, 250)
            }
            else {
                requestAnimationFrame(autoHideHeader)
            }
        }
    })

    function autoHideHeader() {
        var currentTop = $(window).scrollTop()

        // Scrolling up
        if (previousTop - currentTop > scrollDelta) {
            $header.removeClass('is-hidden')
        }
        else if (currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
            // Scrolling down
            $header.addClass('is-hidden')
        }

        previousTop = currentTop
        scrolling = false
    }
});


const smoothLinks = document.querySelectorAll('a[href^="#"]');
for (let smoothLink of smoothLinks) {
    smoothLink.addEventListener('click', function (e) {
        e.preventDefault();
        const id = smoothLink.getAttribute('href');

        document.querySelector(id).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
};


function setSwipe(){
    let startTouchPoint = 0;
    
    let endTouchPoint  = 0;
    
    function handleTouchStart(e){
        startTouchPoint = e.touches[0].clientY;
    }
    
    function handleTouchMove(e){
        endTouchPoint = e.touches[0].clientY;   
    }
    
    function handleTouchEnd(e){
        if(startTouchPoint > endTouchPoint){

            const isCanScrollDown = window.innerHeight > self.pageYOffset + 20
            
            if(isCanScrollDown){
                scrolledDown = true
                scrollDown()    
            }
        }
    }
    
    document.addEventListener('touchstart', handleTouchStart, false);
    
    document.addEventListener('touchmove', handleTouchMove, false);
    
    document.addEventListener('touchend', handleTouchEnd, false);
    
} 






/* SCROLL DOWN */


function scrollDownByWheel() {
    var previousScrollState = 0;

    function compareScrollStateState(currentScrollState) {

        if (currentScrollState > 0) {
            if (previousScrollState < currentScrollState) {

                previousScrollState = currentScrollState
                return 'down'
            } else {
                previousScrollState = currentScrollState
                return 'up'
            }
        }


    }

    var scrolledDown = false
    

    document.addEventListener('wheel', function (e) {
        var scrolled = self.pageYOffset || (document.documentElement && document.documentElement.scrollTop) || (document.body && document.body.scrollTop)
        if (e.deltaY > 0 && scrolledDown == false && scrolled < window.innerHeight) {
            scrolledDown = true
            scrollDown()
        } if (e.deltaY < 0) {
            scrolledDown = false
        }
    })
    
    setSwipe()
}