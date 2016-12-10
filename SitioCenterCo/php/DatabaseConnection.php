<?php
class DatabaseConnection {
    private $username = "bombasticgoods";
    private $password = "Fernandit0";
    private $host = "localhost";
    private $database = "SitioCenter";
    public  $connection; 

    

    function createConnection() {
        $this->connection = mysqli_connect('localhost', 'bombasticgoods', 'Fernandit0', 'SitioCenter');
        echo "Connection was successfull!";
    }
    
    
    function closeConnection() {
        mysql_close();
    }
    
    
    function getConnection() {
        return $this->connection;
    }
}
?>