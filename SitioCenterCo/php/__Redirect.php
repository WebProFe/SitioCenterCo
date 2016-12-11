<?php
class __Redirect {
	private static $home = "SitioCenterCo/SitioCenterCo/SitioCenterCo/index.php";
	

	public static function toHome($success) {
		header("Location: ".self::$home.$success);
	}
}
?>