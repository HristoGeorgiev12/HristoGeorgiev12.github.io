<?php
/**
 * Created by PhpStorm.
 * User: Georgievi
 * Date: 17.12.2015 г.
 * Time: 14:46 ч.
 */

require_once("db_connect.php");

$connect = db_connection("local_host");


//select projects
function projectsSelect($connect) {
    $query = "SELECT
			  p.`id` AS id_project,
			  p.`name`,
			  IF(
			    LENGTH(p.`description`) > 100,
			    CONCAT(
			      SUBSTR(p.`description`, 1, 100),
			      '...'
			    ),
			    p.`description`
			  ) AS `description`,
			  s.`id` AS id_image
			FROM
			  `project` AS p
			  LEFT JOIN images AS s
			    ON p.`id` = s.`id_project`
			    AND s.is_title = 1
			    AND s.to_arc = 0
			    AND s.on_header = 0
			WHERE p.`to_arc` = 0
			  AND s.`to_arc` = 0
			  AND p.`is_project` = 1
			  AND s.is_title = 1
			  AND s.`on_header` = 0";

    $query = mysqli_query($connect, $query);

    if(!$query) {
        DIE("Грешка при селектирането:". mysqli_error($connect));
    }
	
	$data = array();
	while ($row = $query->fetch_assoc()) {
		$data[] = $row;
	}
	
    return $data;
}

function projectView($connect, $id) {
//    $query = "SELECT id FROM images WHERE id_project=".$id;


    $query = "SELECT
			  p.`id`        AS id_project,
			  p.`name`,
			  p.description AS `description`,
			  GROUP_CONCAT(DISTINCT s.id) AS images,
			  s2.id         AS title_img
			  FROM project AS p
			  LEFT JOIN `images` AS s2
			  ON p.`id` = s2.`id_project`
			  AND s2.is_title = 1
			  AND s2.to_arc = 0
			  AND s2.on_header = 0
			  LEFT JOIN `images` AS s
			  ON p.`id` = s.`id_project`
			  AND s.is_title = 0
			  AND s.to_arc = 0
			  AND s.on_header = 0
			  WHERE p.`to_arc` = 0
    		  AND p.`is_project` = 1
  			  AND p.id = $id
			  GROUP BY p.`id`  ";
	$query=mysqli_query($connect, $query);

	$aResult = mysqli_fetch_array($query);

//	$aResult = explode(",",$aResult["images"]);

//    if(!$aResult) {
//        DIE("Грешка при заявката: ".mysqli_error($connect));
//    }
    return $aResult;
}