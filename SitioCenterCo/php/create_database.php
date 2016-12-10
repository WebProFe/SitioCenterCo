<?php 
include "connect_database.php";

 if(isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check the data, and if display an error if the data does not validate.
    if (empty($username) OR empty($password)) {
        header("Location: http://www.sitiocenter.com/index.php?success=-1#form");
        exit;
    }


    // Create a variable for the query that will be used to insert the date inside the table.  
    //TODO : Check for SQL injection
    $query="INSERT INTO
    users(username, password)
    VALUES
    ('$username', '$password')
    ";

     // Use a predefined function to run the query.
     mysqli_query($connection, $query);

     // Use a predefined functin to finish running the query.
     mysql_close();

     // Displays a success message if process finishes sucessfully.
     header("Location: http://www.sitiocenter.com/index.php?success=1#form");
 }

?>
