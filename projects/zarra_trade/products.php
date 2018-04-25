<?php
/**
 * Created by PhpStorm.
 * User: Georgievi
 * Date: 10.12.2015 г.
 * Time: 15:48 ч.
 */

//db projects;
$aProjects = projectsSelect($db_connect);

?>
    <div class="container">
        <?php
        foreach($aProjects as $value) {
            ?>
            <div class="projectContainer col-md-6">
                <!--    Separate sections for each project-->
                <div class="well  projects">

                    <!--        Title of the project-->
                    <h4><?php echo $value["name"];?></h4>

                    <div class="row">
                        <!--            Profile image of the project-->
                        <!--            <div class="col-md-3 col-lg-2">-->
                        <a href="?page=projectView&id=<?php echo $value["id_project"];?>">
                            <img class="img-thumbnail" src="projectsImagesThumbs/<?php echo $value["id_image"];?>.jpg" alt="Image">
                        </a>
                        <!--            </div>-->

                        <!--        Text description for the project-->
                        <div class="col-md-6 description">
                            <?php echo $value['description'];?>
                            <a href="?page=projectView&id=<?php echo $value["id_project"];?>">Виж повече</a><br>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }
        ?>

    </div>
<?php




?>


