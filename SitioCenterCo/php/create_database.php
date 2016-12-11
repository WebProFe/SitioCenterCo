<?php 
require('DatabaseConnection.php');
require("__UserQueryHelper.php");
require("__Redirect.php");

 if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check the data, and if display an error if the data does not validate.
    if (empty($username) OR empty($password)) {
        __Redirect::toHome("?success=-1");
        exit;
    }

    $myConnection = new DatabaseConnection;
    $myConnection->createConnection();

    __UserQueryHelper::insertUser($myConnection->getConnection(), $username, $password);
    __Redirect::toHome("?success=1");
    exit();
 }
 else {
    __Redirect::toHome("?success=-1");
    exit();
 }

?>
