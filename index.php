<?php
require_once "PDOConnector.php";
session_start();
$stmt = $pdo->query("SELECT ");


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
    <input type=submit name="Login">
</form>

