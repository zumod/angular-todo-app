<?php

    require "../dbConfig.php";
    $db=new Connect;
    $post=file_get_contents("php://input");
    $content=(array)json_decode($post);
    $squery ="UPDATE tasks SET status=".$content['status']." WHERE id=".$content['id']."";
    $result=$db->query($squery);
    echo $content['status'];
?>