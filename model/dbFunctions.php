<?php
function connection()
{
    return mysqli_connect('localhost', 'root', 'Root123!', 'task_manager');
}


function insertUser($user = [])
{
    $con = connection();
    $query = sprintf("INSERT INTO users (user_name, password, first_name,last_name,age,gender,image) 
          VALUES ('%s','%s','%s','%s',%d,'%s','%s')",$user['user_name'],$user['password'], $user['first_name'],$user['last_name'],$user['age'],$user['gender'],$user['image']);
    $result = mysqli_query($con,$query);

    mysqli_close($con);
    return $result;
}

function selectUsers()
{
    $con = connection();
    $select = "select * from users";
    $query = mysqli_query($con, $select);
    $results = mysqli_fetch_all($query, MYSQLI_ASSOC);

    mysqli_close($con);
    return $results;


}
function oneUserDb($id){
    $con = connection();
    $select = sprintf("select * from users WHERE id =%d",$id);
    $query = mysqli_query($con, $select);
    $results = mysqli_fetch_all($query, MYSQLI_ASSOC);


    mysqli_close($con);
    return $results;

}

function deleteUserDB($id){
    $con = connection();
    $del = sprintf("DELETE FROM users WHERE id = %d", $id);
    $query = mysqli_query($con, $del);
    mysqli_close($con);
    return $query;
}

function editUserDB($id){

    $con = connection();
    $edit = sprintf("UPDATE users SET WHERE id = %d ",$id);
    $query = mysqli_query($con,$edit);
    $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
    mysqli_close($con);
    print_r( $results);
}

