<?php
require_once "PDOConnector.php";
require_once "functionHub.php";
session_start();
unset($_SESSION['name']);

if (isset($_POST['cancel'])){
    header('Location: index.php');
    return;
}

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
    $error = validateName();
    $error = validateEmail();
    if(is_string($error)){
        $_SESSION['errro'] = $error;
        header('Location: index.php');
        return;
    }

}


?>

<h1> Welcome to Curriculum Vitae Management System </h1>
<h2> Please login your account </h2>
<form>
    <label for="name"> Name: </label>
    <input type=text name="name" id="name"> <br>
    <label for="email"> Email: </label>
    <input type=text name="email" id="email"> <br>
    <label for="password"> Password: </label>
    <input type=password name="password" id="password"> <br>
    <input type=submit name="login" value="Login">
    <input type=submit name="cancel" value="Cancel">
</form>
