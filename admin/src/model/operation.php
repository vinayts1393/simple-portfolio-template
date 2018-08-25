<?php

include("crud.php");

$crud = new Crud();

$user=$_POST['username'];
$pass=$_POST['password'];

if($crud->authenticate('admin',$user,$pass))
    echo "authentication success";
?>