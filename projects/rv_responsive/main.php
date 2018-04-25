<?php
/**
 * Created by PhpStorm.
 * User: Georgievi
 * Date: 10.12.2015 г.
 * Time: 20:37 ч.
 */

$referencii = array(1,2,3,4,5,6,7,8);

?>
<!-- Main Content-->
<div class="container">
    <div class="row">
        <div class=" col-md-8 ">
            <div class="text well" id="aboutUs">
                <h4>За нас</h4>
                Сградите ни се отличават с нестандартна архитектура, качествено изпълнение и функционалност.
                На какво държим в работата си?
                <ul>
                    <li>качествени материали, качествено строителство;</li>
                    <li>спазване на срокове за изпълнение;</li>
                    <li>технологична дисциплина;</li>
                    <li>спазване на договореностите</li>
                </ul>
                прочети още <a href="?page=us">тук</a>
            </div>
        </div>

        <div class="col-md-4" id="declataration">
            <div class="well declaration">
                <h4>Декларация</h4>
                <div class="center">
                    <a  href="images/deklaraciq.jpg" data-lightbox="declaration">
                        <img src="images/deklaraciq_mini.jpg" alt="declaration" class="img-responsive">
                    </a>
                </div>
            </div>
        </div>

        <!--END Slider Section -->
    </div>

    <div class="row">
        <div class="col-md-8" id="servicesList">
            <div class="well services">
                <h4>Услуги</h4>
                РВ ИНЖЕНЕРИНГ ЕООД извършва висококачествени строително-ремонтни услуги като:
                <ul>
                    <li>Мазилки</li>
                    <li>Шпакловки</li>
                    <li>Замазки</li>
                    <li>Боядисване</li>
                    <li>Облицовка</li>
                    <li>Мозайка</li>
                    <li>Дървени облицовки</li>
                    <li>Изкуствени облицовки</li>
                    <li>Хидро и топлоизолации</li>
                    <li>Изолации на тръби,тръбопроводи и други съоръжения</li>
                    <li>Киселинно устойчиви изолации</li>
                    <li>Газопламъчни изолации</li>
                    <li>Течни хидроизолации</li>
                    <li>Топлоизолации</li>
                    <li>Луксозни вътрешни ремонти</li>
                    <li>Почистване на канализации-ръчно и машинно</li>
                    <li>Окачени тавани</li>
                </ul>
                прочети още <a href="?page=services">тук</a>
            </div>

        </div>

        <div class="col-md-4">
            <!--Slider Section -->
            <div class="well" id="referenciiContainer">
                <h4>Референция</h4>
                <div class="slider-wrapper theme-default center">
                    <div class="ribbon"></div>
                    <div id="referencii" class="nivoSlider">
                        <?php
                        foreach($referencii as $value) {
                            ?>
                            <a  href="referencii/r<?php echo $value;?>.jpg" data-lightbox="referencii">
                                <img class="projectImage img-responsive" src="referencii/thumbs/r<?php echo $value;?>t.jpg" alt="referencii">
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ///// main content-->
