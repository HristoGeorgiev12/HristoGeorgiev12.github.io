<?php
/**
 * Created by PhpStorm.
 * User: Georgievi
 * Date: 12.12.2015 г.
 * Time: 12:25 ч.
 */

if(isset($_POST["submit"])) {

    $aErrors = array();

    if(empty($_POST["name"])) {
        $aErrors["name"]="Попълнете полето 'Име'!";
    }

    if(empty($_POST["email"])) {
        $aErrors["email"]="Попълнете полето 'Email'!";
    }

    if(empty($_POST["subject"])) {
        $aErrors["subject"]="Попълнете полето 'Тема'!";
    }

    if(empty($_POST["message"])) {
        $aErrors["message"]="Попълнете полето 'Съобщение'!";
    }

    if(empty($aErrors)) {
        mail("mistic12@abv.bg",$_POST["subject"], $_POST["message"] );
    }
}

//if(!empty($aErrors))
//var_dump($aErrors);

?>


<!--Contact Information-->
<div class="container">


    <div class="row">

        <!--        Карта-->

        <div class="col-md-4">
            <button onclick="getLocation()">Покажи пътя до там</button>
            <p id="demo"></p>
            <label>Карта</label>
            <div id="map"></div>
        </div>

        <div class="col-sm-6 col-md-4 leftMargin">
            <label>Адрес</label><br>
            <div class="well well-sm">
                ул. “Отец Паисий” №19<br>
                Област Шумен<br>
                9700 гр. Шумен
            </div><br>

            <label>e-mail</label><br>
            <div class="well well-sm">
                <a href="mailto:rving@abv.bg">rving@abv.bg</a>
            </div><br>

            <label>Тел:</label><br>
            <div class="well well-sm">
                тел.: 089 43 73 800<br>
                факс: 054 / 801 412.
            </div>
        </div>

        <!--        Изпратетени съобшение-->
        <div class="col-sm-6 col-md-4 leftMargin" id="sendMessage">
            <form action="" method="post" class="pos-center">
                <label>Име</label><br />
                <input name="name" type="text" class="form-control">

                <label>Email</label><br />
                <input name="email" type="text" class="form-control">

                <label>Тема</label><br />
                <input name="subject" type="text" class="form-control">

                <label>Съобщение</label><br />
                <textarea name="message" class="form-control" ></textarea>
                <br />

                <div class="row">
                    <div class="col-sm-6">
                        <div class="g-recaptcha" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;" data-sitekey="6LfX8RITAAAAAPhDuwD_-I666trvVRKedCdrKn-l"></div>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-success" style="float: right;" value="Изпрати">Изпрати</button>
                    </div>
                </div>

                <!-- <div class="g-recaptcha" style="transform:scale(0.60);transform-origin:0 0" data-sitekey="6LfX8RITAAAAAPhDuwD_-I666trvVRKedCdrKn-l"></div> -->

            </form>
        </div>

    </div>
</div>
<!--END of contact information-->

<script>
// Show mu current position;
    var x = document.getElementById("demo");

    var lat;


    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {
        x.innerHTML = "Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude;
    }

//    Google maps initialization;
    function initMap() {
        var myLatLng = {lat: 43.271206, lng: 26.940708};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 20,
            center: myLatLng
        });

        var marker = new google.maps.Marker({
            position: myLatLng,
            map: map,
            title: 'Hello World!'
        });
    }

</script>
<!--        Google maps -->
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB_Xu___smoadTHjOhcbf6rqr3sTe41DMI&signed_in=true&callback=initMap">
</script>