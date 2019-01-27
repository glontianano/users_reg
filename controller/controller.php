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

function deleteUser(){
    require_once __ROOT__."/model/dbFunctions.php";
    echo 'sd';
    print_r($_SERVER['PATH_INFO']);

}






