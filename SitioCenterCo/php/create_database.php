<?php 
require('DatabaseConnection.php');
require("__UserQueryHelper.php");
require("__Redirect.php");

 $success;

 if(validInput()) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    //Create database connection
    $myConnection = new DatabaseConnection;
    $myConnection->createConnection();

    //Call static method from __UserQueryHelper by passing the connection, username and password
    //Save the result from it on variable success, either 1 or -1
    $success = (__UserQueryHelper::insertUser($myConnection->getConnection(), $username, $password) ? 1 : -1);
 }
 //Call redirect to home method from __Redirect class
 __Redirect::toHome("?success="+$success);

 exit();





 /**
 * This method validates if the submit button, the username and the password
 * were correctly set, if they are, then it returns true else false 
 */
 function validInput() {
    $submittedButton = $_POST['submit'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    return ($submittedButton && !empty($username) && !empty($password));
 }

?>
