<?php

define('__ROOT__', __DIR__);

include 'lib/rout.php';

router('/',['controller.php', 'signUpPage']);
router('/newUsersReg',['controller.php', 'newUsersRegistration']);
router('/users',['controller.php', 'showAllUsers']);
router('/deleteUser/{id}',['controller.php','deleteUser']);
router('/editUser/{id}',['controller.php','editUser']);
router('/user/{id}',['controller.php','oneUser']);
router('/changes/{id}',['controller.php','saveForm']);