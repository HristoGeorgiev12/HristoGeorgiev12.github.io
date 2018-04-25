<?php require_once "head.html"; ?>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">


<?php require_once "nav.html"; ?>

<div id="myCarousel" class="carousel slide  carousel-fade" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img 
          src="https://images.pexels.com/photos/266004/pexels-photo-266004.jpeg?h=350&auto=compress&cs=tinysrgb" 
        alt="New York" width="100%" height="100%">    
      </div>

<!--       <div class="item">
        <img 
          src="http://media.npr.org/assets/img/2013/06/10/authenticeyephotography-small-6f69546f31f6a7cfbb783d5c51b760229856a5b4-s900-c85.jpg" 
          alt="Chicago" width="1200" height="700">    
      </div>
    
      <div class="item">
        <img 
          src="https://petapixel.com/assets/uploads/2017/10/horseportraits-8-800x534.jpg" 
        alt="Los Angeles" width="1200" height="700">     
      </div> -->
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>





<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

