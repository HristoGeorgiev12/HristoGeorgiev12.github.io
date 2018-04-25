<?php
//included files;
include_once("db_functions.php");

//db connection;
$db_connect = db_connection("rv");

//Slider images array;
$sliderImages = array(1,2,3,4,12,17,22,35);

//Load the selected page, if such page doesn't exist load error message
            if(isset($_GET["page"])) {
                $page = $_GET["page"];
                if(!file_exists($page.".php")) {
                    $page = "error";
                }
            }else {
                $page = "main";
            }

            $sPageName="";
//          Title name;
            switch($page) {
                case "main":$sPageName = "За нас";
                    break;
                case "projects":$sPageName = "Проекти";
                    break;
                case "contacts":$sPageName = "Контакти";
                    break;
                case "projectView":$sPageName = "Проект";
                    break;
            }
?>
<!doctype html>
    <head>


        <!-- Meta-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <!-- Title-->
        <title>РВ Инженеринг<?php echo "/".$sPageName;?></title>

        <!-- favicon-->
        <link rel="icon" type="image/ico" href="images/favicon.ico" />

        <!-- Styles-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="css/nivo-slider.css" />
        <link rel="stylesheet" type="text/css" href="css/nivoSliderThemes/default/default.css" />
        <link rel="stylesheet" type="text/css" href="css/lightbox.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />

        <!-- Scripts-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src='//www.google.com/recaptcha/api.js' async defer></script>
        <script src='js/jquery.nivo.slider.js'></script>

    </head>
    <body>
        <!--    Clear space for the navigation-->
        <div id="clear_top"></div>
        <div id="navigation">
            <!-- Navigation-->
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <img id="logo" src="images/logo.png" alt="logo" >
                        <a href="#" class="navbar-brand">РВ Инженеринг</a>

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right" >
                            <li><a id="main" href="?page=main">Начало</a></li>
                            <li><a id="us" href="?page=us">За нас</a></li>
                            <li><a id="projects" href="?page=projects">Проекти</a></li>
                            <li><a id="contacts" href="?page=contacts">Контакти</a></li>
                            <li><a id="services" href="?page=services">Услуги</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- ////navigation-->
        </div>


<!--        <!--Slider Section -->
<!--        <div class="slider-wrapper theme-default">-->
<!--            <div class="ribbon"></div>-->
<!--                <div id="slider" class="nivoSlider">-->
<!--<!--                    <img src="projectsSlider/1.jpg" alt="" />-->
<!--                    --><?php
//                        foreach($sliderImages as $value) {
//                            ?>
<!--<!--                                <img src="projectsSlider/--><?php ////echo $value;?><!--<!--.jpg" alt="Slider Images" />-->
<!--                                <img src="projectsSlider/--><?php //echo $value;?><!--.jpg" alt="Slider Images" />-->
<!--                            --><?php
//                        }
//                    ?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <!--END Slider Section -->

<!--        Bootstrap Slider-->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">


            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php
                $active=" active";
                foreach($sliderImages as $value) {
                    ?>
                    <div class="item<?php echo $active;?>">
                        <img src="projectsSlider/<?php echo $value;?>.jpg" alt="Slider Images"/>
                    </div>
                    <?php
                    $active=null;
                }

                ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Prev</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

<!--        Main content of the page-->
        <div id="content">
            <?php
                include_once($page.".php");
            ?>
        </div>
<!--        END of content -->


<!--        LightBox script-->
        <script src="js/lightbox.js"></script>

<!--        NivoSlider script-->
        <script type="text/javascript">
            $(document).ready(function() {
//                $('.nivoSlider').nivoSlider({
//                    controlNav: false
//                });
				
				var col1_data,col2_data;

				col1_data = $("#declataration").html();
				col2_data = $("#servicesList").html();

				var w = $(window).width();        

				if (w < 768) {
					swap_columns();
				}
				

				function swap_columns()
				{
					if(typeof(col1_data) == 'undefined') {
						return;
					}
					
					var w = $(window).width();
					if (w < 768)
					{
						$("#servicesList").html(col1_data);
						$("#declataration").html(col2_data);
					}
					else
					{
						$("#declataration").html(col1_data);
						$("#servicesList").html(col2_data);
					}
				}
				
				$(window).resize(function() {
					swap_columns();
				});	
            });

//            active class add to selected navigation button;
                $("#<?php echo $page;?>").addClass("active");

				

        </script>
    </body>
</html>