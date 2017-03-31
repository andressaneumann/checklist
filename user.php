<?php 

public class User extends Db_object{

	public $id;
	public $name;
	public $username;
	public $password;

	public function verify_user($username, $password){

		global $database;

		$username = $database->escape_string($username);
		$password = $database->escape_string($password);

		$sql = "SELECT * FROM users WHERE ";
		$sql .= "username = '{$username}' ";
		$sql .="AND password = '{$password}' LIMIT 1";

		$the_result_array = self::find_by_query($sql);
		
		return !empty($the_result_array) ? array_shift($the_result_array) : false;

	}
	
} // END OF CLASS USER


?>