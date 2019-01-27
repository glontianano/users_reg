<?php

require_once "dbFunctions.php";

function addNewUser()
{
    print_r($_POST);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $imageName=move_uploaded_file($_FILES['image']['tmp_name'], __ROOT__."/upploaded/{$_FILES['image']['name']}");
    var_dump($imageName);


    insertUser([
        'user_name' =>$username,
        'password' => $password,
        'first_name' => $name,
        'last_name' => $surname,
        'age' => $age,
        'gender' => $gender,
        'image' => $_FILES['image']['name']
    ]);
}






