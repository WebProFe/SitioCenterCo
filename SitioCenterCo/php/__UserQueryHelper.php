<?php
class __UserQueryHelper {



	public static function insertUser($connection, $username, $password) {
		$query = "INSERT INTO Users (username, password) VALUES (?,?)";
		$stmt = $connection->prepare($query);
		$stmt->bind_param("ss", $username, $password);
		
		$stmt->execute();
		$stmt->close();
	}	
}
?>