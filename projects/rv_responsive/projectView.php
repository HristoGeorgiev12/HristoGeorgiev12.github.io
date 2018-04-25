<?php
/**
 * Created by PhpStorm.
 * User: Georgievi
 * Date: 12.12.2015 г.
 * Time: 20:48 ч.
 */



if(isset($_GET["id"])) {
    $aProject = projectView($db_connect,$_GET["id"]);

//    Images array
    $aImages = explode(",",$aProject["images"]);

//    TODO: check if empty
    if(empty($aProject)) {
        DIE("Не е открит проект с това име.");
    }
}else{
    DIE("Грешка при зареждането на проекта.");
}


?>
<!--<div id="clear_top"></div>-->
<div class="container">
<!--    <div class="well well-sm">-->
        <div class="row description">
            <div class="well">
                <h4><?php echo $aProject["name"];?></h4>
                <?php echo $aProject["description"];?>
            </div>
        </div>

        <div class="row projectImage">
            <?php
            $count = 0;
            foreach($aImages as $value) {
                ?>
                <div class="center col-sm-6 col-md-3">
<!--                    <div class="well">-->
                        <a href="projectsImages/<?php echo $value;?>.jpg" data-lightbox="example-set">
                            <img class="well" src="projectsImagesThumbs/<?php echo $value;?>.jpg" >
                        </a>
<!--                    </div>-->

                </div>

                <?php
                $count++;
                if($count%4 == 0) {
                    echo "</div><div class='row projectImage'>";
                }
            }
            ?>
        </div>
<!--    </div>-->


</div>