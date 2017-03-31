<?php

class Db_object {

	public $errors = array();
	public $upload_errors_array = array(

		UPLOAD_ERR_OK 			=> "There is no error!",
		UPLOAD_ERR_INI_SIZE 	=> "The uploaded file exceeds the upload_max filesize",
		UPLOAD_ERR_FORM_SIZE 	=> "The uploaded file exceeds the MAX_FILE_SIZE",
		UPLOAD_ERR_PARTIAL		=> "The uploaded file was only partially uploaded",
		UPLOAD_ERR_NO_FILE 		=> "No file was uploaded",
		UPLOAD_ERR_NO_TMP_DIR 	=> "Missing a temporary folder.",
		UPLOAD_ERR_CANT_WRITE 	=> "Failed to write file to disk",
		UPLOAD_ERR_EXTENSION	=> "A PHP extension stopped the file upload."

		);

	
	public static function find_all(){

		return static::find_by_query("SELECT * FROM " . static::$db_table ."");
	} 


	public static function find_by_id($id){

		global $database;
		
		$the_result_array = static::find_by_query("SELECT * FROM ". static::$db_table ." WHERE id = '$id' LIMIT 1");

		return !empty($the_result_array) ? array_shift($the_result_array) : false;

	}


	public static function instatiation($the_record){

		$calling_class = get_called_class();

		$the_object = new $calling_class;

		foreach ($the_record as $the_attribute => $value) {
			
			if($the_object->has_the_attribute($the_attribute)){
				$the_object-> $the_attribute = $value;
			}
		}
		

		return $the_object;
	}


	public function create(){

		global $database;

		$properties = $this->clean_properties();


		$sql = "INSERT INTO ". static::$db_table ."(". implode(",", array_keys($properties)) .")";
		$sql .= "VALUES('" . implode("','", array_values($properties)) . "')";


		$db = $database->query($sql);
		
		if($db){
			
			$row = pg_fetch_array($db);
			$key = $row['id'];

			$this->id = $key;

			return true;

		} else {
			
			return false;

		}
		

	} // END CREATE METHOD


	public function update(){
		
		global $database;

		$properties = $this->clean_properties();

		$properties_pairs = array();

		foreach ($properties as $key => $value) {
			
			$properties_pairs[] = "{$key} = '{$value}' ";
		}

		$sql = "UPDATE ". static::$db_table ." SET ";
		$sql .= implode(", ", $properties_pairs);
		$sql .= " WHERE id=" . $database->escape_string($this->id);

		$db = $database->query($sql);

		return (pg_affected_rows($db) == 1) ? true : false;

	} // END OF UPDATE METHOD


	public function delete(){

		global $database;

		$sql = "DELETE FROM ". static::$db_table ."";
		$sql .= " WHERE id= " . $database->escape_string($this->id);

		$db = $database->query($sql);

		return (pg_affected_rows($db) == 1) ? true : false;

	} // END OF DELETE METHOD


	protected function clean_properties(){

		global $database;

		$clean_properties = array();

		foreach ($this->properties() as $key => $value) {
			
			$clean_properties[$key] = $database->escape_string($value);
		}

		return $clean_properties;
	}

	protected function properties() {

		$properties = array();

		foreach (static::$db_table_fields as $db_field) {
			
			if(property_exists($this, $db_field)){

				$properties[$db_field] = $this->$db_field;
			}
		}

		return $properties;
		
	}


	public static function count_all() {

		global $database;

		$sql = "SELECT COUNT(*) FROM " . static::$db_table;
		$result_set = $database->query($sql);

		$row = pg_fetch_array($result_set);

		return array_shift($row);

	}

} // END OF CLASS DB_OBJECT
?>