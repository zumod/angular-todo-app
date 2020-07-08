<?php
require '../dbconfig.php';

//http://localhost/angular_put_api/api/putData.php

/*

[{
  "name":"Anu"
}]

*/


$post = file_get_contents("php://input");
$content = (array)json_decode($post,true);



$sql ="insert into user('name') values('" . $content[0]['name'] . "')";
$result = $mysqli->query($sql);
$lastid= $mysqli->insert_id;

$query = "select * from user where id = '".$lastid."' ";
$res = $mysqli->query($query);
$arr1 = array();
while ($row = $res->fetch_assoc())
{
    $arr1[] = $row;

}

echo json_encode($arr1);
?>