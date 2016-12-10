    
<?php
require_once('php/DatabaseConnection.php');
$myConnection = new DatabaseConnection;
$myConnection->createConnection();
echo "si le gusto!";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/queries.css">
        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,300italic' rel='stylesheet' type='text/css'>
        <title>Reading From Database</title>

    </head>
    <body>
        <header>
        </header>
        <section class="rsvp js--wedding">
            <div class="container-rsvp">
                <h2>Log In</h2>
                <p>This is my log in System</p>
                    <form class="rsvp-form"  action="php/create_database.php" method="POST" enctype="multipart/form-data">
                        <?php
                        if($_GET['success'] == 1){
                            echo"<div class=\"form-messages success\">Thank you, your RSVP information has been sent.</div>";
                        }
                        if($_GET['success']== -1 ){
                            echo"<div class=\"form-messages error\">Oops! Something went wrong. Please try again.</div>";
                        }
                        ?>


                      <label for="username">Username</label><br>
                      <input type="text" id="username" name="username" placeholder="TYPE USERNAME" required><br>

                      <label for="password">Password</label><br>
                      <input type="password" id="password" name="password" placeholder="TYPE PASSWORD" required><br>

                      <input type="submit" value="Submit" name="submit">
                    </form>

            </div>
        </section>
        <footer>
            <div class="row">
                <p>Copyright &copy; 2016 by Fernando. All rights reserved</p>
            </div>
        </footer>
    </body>

</html>