<?php

include __ROOT__ . '/lib/templating.php';


function signUpPage(){
    render('registration');


}

function newUsersRegistration(){
    render ('login');
    if (isset($_POST)){
        require_once __ROOT__."/model/dbLogic.php";
        addNewUser();
    }

}

function showAllUsers(){

    require_once __ROOT__."/model/dbFunctions.php";
    $users = selectUsers();
    render('users',$users);


}
function oneUser($id){
    require_once __ROOT__."/model/dbLogic.php";

    $query = oneUserDb($id);


}

function deleteUser($id){
    require_once __ROOT__."/model/dbFunctions.php";

    $del = deleteUserDB($id);
    echo $del ? 'success' : 'error';
}

function editUser($id)
{

    require_once __ROOT__ . "/model/dbFunctions.php";
    $user = oneUserDb($id);
    render('edit', $user);
}

function saveForm($id){


    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $imageName = move_uploaded_file($_FILES['image']['tmp_name'], __ROOT__."/upploaded/{$_FILES['image']['name']}");

    require_once   __ROOT__."/model/dbFunctions.php";
    saveFormDB([
        'user_name' =>$username,
        'password' => $password,
        'first_name' => $name,
        'last_name' => $surname,
        'age' => $age,
        'gender' => $gender,
        'image' => $_FILES['image']['name']
    ],$id);

}








