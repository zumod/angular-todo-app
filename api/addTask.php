<?php

    require "../dbConfig.php";
    $db=new Connect;
    $post=file_get_contents("php://input");
    $content=(array)json_decode($post);
    $squery="INSERT INTO tasks (`task`) VALUES ('".$content['task']."')";
    $result=$db->query($squery);

    echo $content['task']; 

?>