

<?php 

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        
        $query="UPDATE users SET username='$username', password='$password' WHERE id='$id' ";
    
    }

// Use a predefined function to run the query.
$result = mysqli_query($connection, $query);

// Checked if the query ran successfuly.
    if(!$result){
        die('Query Failed' . mysqli_error());
    }

// Use a predefined functin to finish running the query.
mysql_close();

// Displays a success message if process finishes sucessfully.
header("Location: http://www.sitiocenter.com/update.php?success=1#form");

?>


