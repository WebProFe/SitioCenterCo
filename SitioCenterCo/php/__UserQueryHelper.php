<?php
class __UserQueryHelper {



	public static function insertUser($connection, $username, $password) {
		$success = false;

		$query = "INSERT INTO Users (username, password) VALUES (?,?)";
		$stmt = $connection->prepare($query);
		$stmt->bind_param("ss", $username, $password);
		
		$success = $stmt->execute();
		$stmt->close();

		return $success;
	}	
}
?>