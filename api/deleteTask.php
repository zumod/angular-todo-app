<?php

    require "../dbConfig.php";
    $db=new Connect;
    $post=file_get_contents("php://input");
    $content=(array)json_decode($post);
    $squery = "DELETE FROM tasks WHERE id=".$content['task']."";
    $result=$db->query($squery);
?>