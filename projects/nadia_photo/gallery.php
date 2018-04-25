<?php 
  require_once "head.html"; 
  require_once "nav.html"; 
?>


<div class="container">
<!--   <h2>Image Gallery</h2>
  <p>The .thumbnail class can be used to display an image gallery.</p>
  <p>The .caption class adds proper padding and a dark grey color to text inside thumbnails.</p>
  <p>Click on the images to enlarge them.</p> -->
  <?php 
    $image_array =  [];
    $counter = 0;
    foreach(glob('./images/*.*') as $filename){
      $image_array[] = $filename;
      ?>
        <div class="col-md-4">
          <div class="thumbnail">
              <img src="<?= $filename; ?>" alt="<?= $filename; ?>" style="width:100%" class="image" 
                onclick="openModal();currentSlide(<?= $counter; ?>)">
          </div>
        </div>
      <?php
    }
  ?>
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
      <?php 

    foreach(glob('./images/*.*') as $filename){
      $image_array[] = $filename;
      ?>
    <div class="mySlides">
      <!-- <div class="numbertext">1 / {$counter}</div> -->
      <img src="<?= $filename ?>" style="width:100%">
    </div>

          <?php
    }
  ?>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
      <?php 
    $counter = 0;
    foreach(glob('./images/*.*') as $filename){
      $image_array[] = $filename;
      $counter++;
      ?>
    <div class="column">


      <img class="demo" src="<?= $filename; ?>" onclick="currentSlide(<?= $counter;?>)" alt="Nature" >


    </div>
              <?php
    }
  ?>

  </div>
</div>

</body>
  <!-- <script src="javascript/light_box.js"></script> -->

</html>


