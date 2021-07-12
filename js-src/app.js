
//** SLIDESHOW */
let slidesContainer = document.querySelector('.slide-container');
let slides = document.querySelector('.slide-inner');
let dots = Array.prototype.slice.call(document.querySelectorAll('.dots'));

let mousePosX;
let mouseEndX;
let mouseStartX;
let moveBy = 100;
let slideHover = false;
let windowWidth = $('body').innerWidth() - 17;
let newMargin = 0;
let newMove;
let sliding = false;
let originalVal;


//** Automatic slideshow */
try {
    function slideShow() {
        setInterval(() => {
            $('.dots-container').on('mouseover', () => {
                slideHover = true;
            });
            $('.slide-container').on('mouseover', () => {
                slideHover = true;
            });
            $('.slide-container').on('mouseout', () => {
                slideHover = false;
            });
            $('.slide-container').on("mousedown", () => {
                slideHover = true;
            });
    
            // call moveSlide if not hovering over.
            if (slideHover === false) {
                next();
                moveSlide(moveBy, changeDot());
            }
        }, 4000);
    }
    //** When a dot is clicked */
    dots.forEach((dot, index) => {
        dot.addEventListener("click", function() {
            moveBy = (index + 1) * 100;
            moveSlide(moveBy, changeDot());
        })
    })
    //** When the mouse is clicked and dragged */
    slidesContainer.addEventListener("mousedown", (e) => {
        // Drag begins
        slidesContainer.style.cursor = 'grab';
        $('.slide-inner').removeClass("transition");
    
        // gets mouse position from left of slide inner.
        mousePosX = e.clientX;
        mouseStartX = e.clientX - slides.offsetLeft;
    
        // calls mouseMoveDuringDrag on mousemove event.
        $('.slide-container').on("mousemove", mouseMoveDuringDrag);
    });
    function mouseMoveDuringDrag(e) {
        // During drag
        e.preventDefault();
    
        // gets ending mouse position.
        mouseEndX = e.clientX - mouseStartX;

        // gets width of window again incase resized.
        windowWidth = $('body').innerWidth() - 17;
        
        // gets the new margin without the current margin.
        newMargin = (mouseEndX / windowWidth) * 100;
        // Makes it a positive value
        newMargin = newMargin < 0 ? newMargin * -1 : newMargin;
    
        // moves slide.
        newMove = newMargin;
        moveSlide(newMove);
    }
    slidesContainer.addEventListener("mouseup", (e) => {
        // Drag ends
        $('.slide-container').off("mousemove", mouseMoveDuringDrag);
    
        // sets class and style.
        $('.slide-inner').addClass("transition");
        slidesContainer.style.cursor = 'default';
        sliding = false;
    
        // Snap to next / previous slide and change dot.
        moveBy = Math.round(newMove / 100) * 100;

        // Check how much the mouse moved, if moved between 30% and 50% then change slide.
        // Else continue - Math.round gets the correct value otherwise.
        let check = (newMove / 100) % 1;

        if ((check > .3 && check < .5) && (mousePosX > e.clientX)) {
            moveBy += 100;
        } else if ((check < .7 && check > .5) && (mousePosX < e.clientX)) {
            moveBy -= 100;
        }

        moveSlide(moveBy, changeDot());
    });
    // Changes slides.
    function moveSlide(distance, callback = null) {
    
        slides.style.left = `-${distance}%`;
    
        if (distance === 700) {
            setTimeout(() => {
                $('.slide-inner').removeClass("transition");
                distance = 100;
        
                cycle(distance);
        
            }, 199);
        } else if (distance === 0) {
            setTimeout(() => {
                $('.slide-inner').removeClass("transition");
                distance = 600;
        
                cycle(distance);
        
            }, 199);
        } 
    
        // calls callback (changeDot)
        if (!sliding && callback !== null) {
            callback();
        }
    }
    // Cycle to first or last.
    function cycle(replace) {
    
        slides.style.left = `-${replace}%`;
    
        setTimeout(() => {
            $('.slide-inner').addClass("transition");
        }, 10);
    }
    // Changes the dots.
    function changeDot() {
        let index;
    
        dots.forEach((dot) => {
            dot.classList.remove('active');
        })
    
        if (moveBy === 0 ) {
            index = 5;
        } else if (moveBy === 700) {
            index = 0;
        } else {
            index = Math.round(moveBy / 100 - 1);
        }
        dots[index].classList.add('active');
    }
    // Increments moveBy.
    function next() {
        moveBy === 700 ? moveBy = 100 : moveBy += 100;
    }
    // Decrements moveBy.
    function prev() {
        moveBy === 100 ? moveBy = 600 : moveBy -= 100;
    }
    
    document.addEventListener("DOMContentLoaded", moveSlide(moveBy));
    
} catch (error) {}


//** SIDE BAR */
$('.inner-nav').on('click', () => {
    $('.page-contents').addClass('side-bar-shift');
    $('.overlay-placeholder').addClass('overlay');
    $('.overlay-placeholder').addClass('overlay-width');
    $('.bar-1').addClass('nav-merge-down');
    $('.bar-3').addClass('nav-merge-up');
    $('.bar-2').addClass('nav-middle');
    $('.overlay-placeholder').on('click', () => {
        $('.page-contents').removeClass('side-bar-shift');
        $('.overlay-placeholder').removeClass('overlay');
        $('.overlay-placeholder').removeClass('overlay-width');
        $('.bar-1').removeClass('nav-merge-down');
        $('.bar-3').removeClass('nav-merge-up');
        $('.bar-2').removeClass('nav-middle');
    });
});


//** STICKY HEADER */
let previousPosition = null;

$('.page-contents').on('scroll', function() {

    let head_height = $('.header-nav').innerHeight();

    if (this.scrollTop > head_height) {
        $('.header-nav').addClass('sticky-header');
        if (getScrollbarWidth() === 0) {
            $('.header-nav').addClass('mob-header');
        } else {
            $('.header-nav').removeClass('mob-header');
        }
    }

    if (this.scrollTop <= previousPosition && this.scrollTop > head_height) {
        $('.header-nav').addClass('show-sticky-header');
    } else if (this.scrollTop <= head_height) {
        $('.header-nav').removeClass('sticky-header');
        $('.header-nav').removeClass('show-sticky-header');
    } else {
        $('.header-nav').removeClass('show-sticky-header');
    }

    previousPosition = this.scrollTop;
});
function getScrollbarWidth() {

    // Creating invisible container
    const outer = document.createElement('div');
    outer.style.visibility = 'hidden';
    outer.style.overflow = 'scroll'; // forcing scrollbar to appear
    outer.style.msOverflowStyle = 'scrollbar'; // needed for WinJS apps
    document.body.appendChild(outer);
  
    // Creating inner element and placing it in the container
    const inner = document.createElement('div');
    outer.appendChild(inner);
  
    // Calculating difference between container's full width and the child width
    const scrollbarWidth = (outer.offsetWidth - inner.offsetWidth);
  
    // Removing temporary elements from the DOM
    outer.parentNode.removeChild(outer);
  
    return scrollbarWidth;
  
}


//** COOKIES */
function checkCookies() {
    if (!localStorage || !localStorage.getItem("cookie_key")) {
        $('.overlay-placeholder').addClass('overlay');
        $('.cookies-container').css({display: "block"})
        $('.accept-cookies').on('click', () => {
            $('.cookies-container').css({display: "none"});
            $('.overlay-placeholder').removeClass('overlay');
            if (localStorage) {
                localStorage.setItem("cookie_key", "cookie_value");
            }
        });
    }
}


//** MAPS */
const locations = [
    {lat:52.57581327996856, lng:1.1363904052819627},
    {lat:52.55699602616733, lng:1.7125076375741055}
];
function initMap() {
    // Map options
    let options = [
        {
            zoom: 11,
            center: locations[0],
            gestureHandling: "cooperative"
        },
        {
            zoom: 11,
            center: locations[1],
            gestureHandling: "cooperative"
        }
    ]

    // New map
    let maps = Array();

    for (let i = 0; i < 2; i++) {
        maps[i] = new google.maps.Map(document.getElementById("map-loc-".concat(i)), options[i]);
    }

    // Add marker
    setMarker(locations[0], maps[0]);
    setMarker(locations[1], maps[1]);
}
function setMarker(coords, id) {
    let marker = new google.maps.Marker({
        position: coords,
        map:id
    });
}


//** ACCORDION */
let open = false;

$('.trigger').on("click", function() {
    let accord = $(".accordion");

    if (!open) {
        $(accord).slideDown(400);
        open = true;
    } else {
        $(accord).slideUp(400);
        open = false;
    }
});


//** FROM VALIDATION */
$('#contact-form-btn').on('click', (e) => {
    let empty = false;

    // Array that holds all of the input fields.
    let fields = [];
    fields[0] = $('#name-enquiry');
    fields[1] = $('#email-enquiry');
    fields[2] = $('#telephone-enquiry');
    fields[3] = $('#subject-enquiry');
    fields[4] = $('#message-enquiry');

    // Remove any errors.
    for (let i = 0, c = fields.length; i < c; i++) {
        fields[i].removeClass('contact-error');
    }

    // Checks if any of the input fields in the array are empty and changes the colour of empty fields to red.
    for (let i = 0, c = fields.length; i < c; i++) {
        if (fields[i].val().trim() === "") {
            fields[i].addClass('contact-error');
            empty = true;
        }
    }

    let valid_email = ValidEmail(fields[1].val().trim());
    let valid_phone = ValidNumber(fields[2].val().trim());

    if (!valid_email) {
        fields[1].addClass('contact-error');
    }
    if (!valid_phone) {
        fields[2].addClass('contact-error');
    }

    // Do nothing if any are empty.
    if (empty || !valid_email || !valid_phone) {
        e.preventDefault();
        return;
    }

});
function ValidEmail(email) {

    const match = /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9]+).([a-z]+).([a-z]+)$/;

    if (match.test(email)) {
        return true;
    }

    return false;
}
function ValidNumber(num) {

    const match1 = /^\d{10}$/;
    const match2 = /^\d{11}$/;

    if (num.match(match1) || num.match(match2)) {
        return true;
    }

    return false;
}

function success() {
    $('.added-contact').addClass('show-message');
    setTimeout(function () {
        $('.added-contact').removeClass('show-message');
    }, 3000);
}