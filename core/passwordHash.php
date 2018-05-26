<?php
class passwordHash{
	public static function Hash($pass){
		$hash = password_hash($pass, PASSWORD_BCRYPT, ["cost"=>12]);
		return $hash;
	}
	public static function Verify($pass, $hash){
		$verified = password_verify($pass, $hash);
		return $verified;
	}
}
?>