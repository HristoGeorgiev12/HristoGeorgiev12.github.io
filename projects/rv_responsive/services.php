<?php
/**
 * Created by PhpStorm.
 * User: Georgievi
 * Date: 5.1.2016 г.
 * Time: 18:22 ч.
 */

$referencii = array(1,2,3,4,5,6,7,8);

?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well">
                <h4>Услуги</h4>
                <div class="text">
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
                        <li>строително-монтажни работи с алпинисти</li>
                    </ul>
                    <div class="text">
                        <a href="images/alp1.jpg" rel="lightbox[alp]"><img src="images/alp1thumb.jpg" alt="алпинисти услуги" /></a>
                        <a href="images/alp2.jpg" rel="lightbox[alp]"><img src="images/alp2thumb.jpg" alt="алпинисти услуги" /></a>
                        <p>Жилищни и промишлени строително-монтажни работи с алпинисти.Високо качество и експедитивност.</p>

                    </div>
                    <div class="text">
                        Фирмата е изключителен представител на  ниско енергийните къщи <a href="http://www.richhouse.eu" target="_blank">“Rich  House”</a> за североизточна България,които се отличават с  висок&nbsp; комфорт на живот,ниски разходи за  отопление и охлаждане,висока ефективност,здравина,бързина на  строителство,достъпност и екологичност.
                    </div>
                </div>
            </div>
        </div>

        <!--        Декларация и референции-->
        <div class="col-md-4" id="declataration">
            <div class="well declaration">
                <h4>Декларация</h4>
                <div class="center">
                    <a href="images/deklaraciq.jpg" data-lightbox="declaration">
                        <img src="images/deklaraciq_mini.jpg" alt="declaration" class="img-responsive">
                    </a>
                </div>

            </div>

            <div class="well referenciiContainer">
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
