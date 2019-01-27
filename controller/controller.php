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

function saveChanges(){
    
}






