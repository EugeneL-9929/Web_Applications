<?php
require_once "PDOConnector.php";
session_start();

?>

<h1> Welcome to Curriculum Vitae Management System </h1>
<h2> Please login your account </h2>
<form>
    <label for="email"> Email: </label>
    <input type=text, name="email", id="email"> <br>
    <input type=submit name="Login">
</form>

