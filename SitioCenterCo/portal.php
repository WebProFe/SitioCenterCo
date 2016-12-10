<?php include "php/connect_database.php";?>
<?php include "php/read_database.php";?>


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
                <h2>User List</h2>
                <p>This is a list of all users</p>
                
                <?php
                    while( $row = mysqli_fetch_assoc($result )){
                ?>
                
                <pre>
                <?php
                        print_r($row);
                ?>
                </pre>
                <?php
                        
                }
                
                ?>

            </div>
        </section>
        <footer>
            <div class="row">
                <p>Copyright &copy; 2016 by Fernando. All rights reserved</p>
            </div>
        </footer>
    </body>

</html>