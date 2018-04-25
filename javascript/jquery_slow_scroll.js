
Code Snippets » jQuery Code Snippets »
Smooth Scrolling
BY CHRIS COYIER LAST UPDATED ON APRIL 23, 2017
JQUERY, SCROLLING, SMOOTH SCROLLING
Smooth Scrolling
Native browser smooth scrolling is like this:

// Scroll to specific values
// scrollTo is the same
window.scroll({
  top: 2500, 
  left: 0, 
  behavior: 'smooth' 
});

// Scroll certain amounts from current position 
window.scrollBy({ 
  top: 100, // could be negative value
  left: 0, 
  behavior: 'smooth' 
});

// Scroll to a certain element
document.querySelector('.hello').scrollIntoView({ 
  behavior: 'smooth' 
});
Dustan Kasten has a polyfill for this.

#Accessibility of Smooth Scrolling
Whatever technology you use for smooth scrolling, accessibility is a concern. For example, if you click a #hash link, the native behavior is for the browser to change focus to the element matching that ID. The page may scroll, but the scrolling is a side effect of the focus changing.

If you override the default focus-changing behavior (which you have to, to prevent instant scrolling and enable smooth scrolling), you need to handle the focus-changing yourself.

Heather Migliorisi wrote about this, with code solutions, in Smooth Scrolling and Accessibility.

#Smooth Scroll with jQuery
jQuery can also do this. Here's the code to perform a smooth page scroll to an anchor on the same page. It has some logic built in to identify those jump links, and not target other links.

// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });