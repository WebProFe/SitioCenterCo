<?php 
require('DatabaseConnection.php');
require("__UserQueryHelper.php");
require("__Redirect.php");

 $success;

 if(validInput()) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $myConnection = new DatabaseConnection;
    $myConnection->createConnection();

    $success = (__UserQueryHelper::insertUser($myConnection->getConnection(), $username, $password) ? 1 : -1);
 }
 __Redirect::toHome("?success="+$success);

 exit();






 function validInput() {
    $submittedButton = $_POST['submit'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    return ($submittedButton && !empty($username) && !empty($password));
 }

?>
