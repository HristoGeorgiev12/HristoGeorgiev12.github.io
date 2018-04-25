<?php
/**
 * Created by PhpStorm.
 * User: Georgievi
 * Date: 22.12.2015 ã.
 * Time: 11:55 ÷.
 */

//DB connection
function db_connection($table) {
    $db_connect = mysqli_connect("localhost","root","0000",$table);

    if(!$db_connect) {
        DIE("Грешка : ".mysqli_error($db_connect));
    }

    mysqli_set_charset($db_connect, "utf8");

    return $db_connect;
}
