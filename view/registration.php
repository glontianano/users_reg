<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<form action="/newUsersReg" method="post" enctype="multipart/form-data">
    Username
    <br>
    <input type="text" name="username">
    <br>
    password
    <br>
    <input type="password" name="password">
    <br>
    First Name
    <br>
    <input type="text" name="name">
    <br>
    Last Name
    <br>
    <input type="text" name="surname">
    <br>
    age
    <br>
    <input type="age" name="age">
    <br>
    gender
    <br>
    <input type="text" name="gender">
    <br>
    add your profile picture
    <br>
    <input type="file" name="image" id="image" />
    <br>
    <input type="submit"  value="submit">
</form>

</body>
</html>