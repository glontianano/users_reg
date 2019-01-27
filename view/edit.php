<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php foreach ($variables as $userData) : ?>

<form action='/changes/<?php echo $userData['id']?>' method="post" enctype="multipart/form-data">
    Username
    <br>
    <input type="text" name="username" value ="<?php echo $userData['user_name']; ?>">
    <br>
    password
    <br>
    <input type="password" name="password" value="<?php echo $userData['password']; ?>">
    <br>
    First Name
    <br>
    <input type="text" name="name" value="<?php echo $userData['first_name']; ?>">
    <br>
    Last Name
    <br>
    <input type="text" name="surname" value="<?php echo $userData['last_name']; ?>">
    <br>
    age
    <br>
    <input type="age" name="age" value="<?php echo $userData['age']; ?>">
    <br>
    gender
    <br>
    <input type="text" name="gender" value="<?php echo $userData['gender']; ?>">
    <br>
    add your profile picture
    <br>
    <input type="file" name="image" id="image" value="<?php echo $userData['first_name']; ?>">
    <br>
    <input type="submit"  value="submit" >
</form>
<?php endforeach; ?>



</body>
</html>