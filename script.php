<?php

    include('./dbconnect.php');
    session_start();

    //login script
    if(isset($_POST['login'])){
        $un = mysqli_real_escape_string($con, $_POST['username']);
        $pw = mysqli_real_escape_string($con, $_POST['password']);

        $query = "SELECT * FROM user WHERE username='$un' AND password='$pw'";
        $res = mysqli_query($con, $query);

        if(mysqli_num_rows($res)>0){
            $_SESSION['un'] = $un;
            header('location:home.php');
        }else{
            header('location: login.php');
        }
    }

    //add book
    if(isset($_POST['insert'])){
        $title = mysqli_real_escape_string($con, $_POST['title']);
        $category = mysqli_real_escape_string($con, $_POST['category']);
        $author = mysqli_real_escape_string($con, $_POST['author']);

        $sql = "INSERT INTO book(name,category, author) VALUES('$title','$category','$author')";
        $res = mysqli_query($con, $sql);

        if($res){
            header('location: home.php');
        }else{
            echo "Failed to insert";
        }
    }

    //update book
    if(isset($_POST['update'])){
        $id= mysqli_real_escape_string($con,$_POST['id']);
        $title = mysqli_real_escape_string($con, $_POST['name']);
        $category = mysqli_real_escape_string($con, $_POST['category']);
        $author = mysqli_real_escape_string($con, $_POST['author']);

        $sql = "UPDATE book SET name='$title',category='$category',author='$author' WHERE id='$id'";
        $res = mysqli_query($con,$sql);

        if($res){
            header('location:home.php');
        }else{
            echo "Failed to update";
        }
    }