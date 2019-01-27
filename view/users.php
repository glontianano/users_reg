<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>users</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        tr.thead th{
            padding-left: 50px;

            text-align: center;
        }
        .hidden{
            display: none;
        }

    </style>
</head>
<body>

<table class ="table">
    <thead>
    <tr class="thead">
        <th>ID</th>
        <th>Picture</th>
        <th>username</th>
        <th>Name</th>
        <th>surname</th>
        <th>age</th>
        <th>gender</th>

    </tr>
    </thead>
    <tbody class="body">

    <?php foreach ($variables as $user ) : ?>

    <tr id='<?php echo $user['id'] ?>' data-row = '<?php echo $user['id'] ?>'>

    <td><?php echo $user['id'] ?></td>

    <td><img  alt="image" height="42" width="42" src="../upploaded/<?php echo $user['image']?> "></td>
    <td><?php echo $user['user_name']  ?></td>
    <td><?php echo $user['first_name']  ?></td>
    <td><?php echo $user['last_name'] ?></td>
    <td><?php echo $user['age'] ?></td>
    <td><?php echo $user['gender'] ?></td>


    <td>
        <a href="<?php echo 'edit?id='.$user['id'] ?>" class="editBtn">Edit</a>
    </td>
    <td>
        <button  onclick='removeUser("<?php echo $user['id']; ?>")'> Delete </button>
    </td>

    </tr>
    </tbody>
    <?php endforeach; ?>

</table>

<script src="../public/main.js"></script>

</body>
</html>


