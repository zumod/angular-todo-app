<?php

    require "../dbConfig.php";
    $db=new Connect;
    $tasks=array();
    $data=$db->prepare('SELECT * from tasks ORDER BY id');
    $data->execute();
    while($OutputData=$data->fetch(PDO::FETCH_ASSOC)){
        $tasks[$OutputData['id']]=array(
            'id'=>$OutputData['id'],
            'task'=>$OutputData['task'],
            'status'=>$OutputData['status'],

        );
    }
    // return json_encode($tasks);

    echo json_encode($tasks); 

?>