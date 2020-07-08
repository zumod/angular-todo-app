<?php
$conn = mysqli_connect("localhost", "root", "", "post_apis");
$info = (array)json_decode(file_get_contents("php://input"));
if(count($info) > 0)
{   $name = mysqli_real_escape_string($conn, $info['name']);
    $age = mysqli_real_escape_string($conn,  $info['age']);
    $email = mysqli_real_escape_string($conn,  $info['email']);
    $query = "INSERT INTO user(name, email, age) VALUES ('$name', '$age', '$email')";
    if(mysqli_query($conn,$query)) {
        echo "Data inserted succesfull";
    }
    else{
        echo "Data not insterted";
    }
}
?>