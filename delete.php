<?php

    include('./dbconnect.php');

    $id = $_GET['id'];
    $sql = "DELETE FROM book WHERE id='$id'";
    $res = mysqli_query($con, $sql);

    if($res){
        header('location:home.php');
    }else{
        echo "Failed to delete";
    }