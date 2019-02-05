<?php

require_once('libs/DB.php');
require_once('libs/User.php');

if(isset($_GET['logout'])) {
    User::logout();
}

if(isset($_POST['register'])){
    $tpl_data = User::register($_POST);
}

require("view/index.php");
