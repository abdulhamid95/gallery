<?php

class Db_object {

    public $error = array();

    public $custom_errors = array();

    public $upload_errors_array = array(
        0 => 'There is no error, the file uploaded with success',
        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
        3 => 'The uploaded file was only partially uploaded',
        4 => 'No file was uploaded',
        6 => 'Missing a temporary folder',
        7 => 'Failed to write file to disk.',
        8 => 'A PHP extension stopped the file upload.',
    );

    public static function find_all(){

        
        return static::find_by_query("SELECT * FROM " . static::$db_table . " ");
        
        
        // global $database;

        // $result_set = $database->query("SELECT * FROM users");

        // return $result_set;

    }

    public static function find_by_id($id){

        global $database;

        $the_result_array = static::find_by_query("SELECT * FROM " . static::$db_table . " WHERE id=$id LIMIT 1");


        //return !empty($the_result_array) ? arra y_shift($the_result_array) : false;


        if(!empty($the_result_array)){
            $first_item = array_shift($the_result_array);
            return $first_item;
        } else {

            return false;

        }



        // $found_user = mysqli_fetch_array($result_set);

        return $found_user;

    }

    public function find_by_query($sql){
        global $database;
        $result_set = $database->query($sql);
        $the_object_array = array();

        while ($row = mysqli_fetch_array($result_set)){
            $the_object_array[] = static::instantation($row);
        }

        return $the_object_array;
    }

    public static function instantation($the_record){


        $calling_class =get_called_class();
        $the_object = new $calling_class;

        // $the_object->id = $found_user['id'];
        // $the_object->username = $found_user['username'];
        // $the_object->password = $found_user['password'];
        // $the_object->first_name = $found_user['first_name'];
        // $the_object->last_name = $found_user['last_name'];

        foreach ($the_record as $the_attribute => $value) {
            if($the_object->has_the_attribute($the_attribute)){

                $the_object->$the_attribute = $value;

            }
        }
            
        return $the_object;

    }


    private function has_the_attribute($the_attribute){
        $object_properties = get_object_vars($this);
        return array_key_exists($the_attribute, $object_properties);
    }

    protected function properties(){
        // return get_object_vars($this);

        $properties = array();

        foreach (static::$db_table_fields as $db_field) {
            if(property_exists($this, $db_field)){
                $properties[$db_field] = $this->$db_field;
            }
        }

        return $properties;
    }


    protected function clean_properties(){

        global $database;

        $clean_properties = array();

        foreach ($this->properties() as $key => $value) {
            $clean_properties[$key] = $database->escape_string($value);
        }

        return $clean_properties;
    }


    public function save(){

        return (isset($this->id)) ? $this->update() : $this->create();
    } // Save Method

    public function create(){

        global $database;

        $properties = $this->clean_properties();

        $sql = "INSERT INTO " . static::$db_table . "(" . implode(",", array_keys($properties)) . ")";
        $sql .= "VALUES ('". implode("','", array_values($properties)) ."')";


        //Another Method

        // $sql = "INSERT INTO " . static::$db_table . " (username,  password, first_name, last_name)";
        // $sql .= "VALUES ('";
        // $sql .= $database->escape_string($this->username) . "', '";
        // $sql .= $database->escape_string($this->password) . "', '";
        // $sql .= $database->escape_string($this->first_name) . "', '";
        // $sql .= $database->escape_string($this->last_name) . "')";


        if($database->query($sql)){

            $this->id = $database->the_insert_id();

            return true;

        } else {

            return false;
        }

    } // Create method


    public function update(){

        global $database;

        $properties = $this->clean_properties();

        $properties_paris = array();

        foreach ($properties as $key => $value) {
            $properties_paris[] = "{$key}='{$value}'";
        }

        $sql = "UPDATE " .static::$db_table . " SET ";
        $sql .= implode(", ", $properties_paris);
        // $sql .= "username= '" . $database->escape_string($this->username) . "', ";
        // $sql .= "password= '" . $database->escape_string($this->password) . "', ";
        // $sql .= "first_name= '" . $database->escape_string($this->first_name) . "', ";
        // $sql .= "last_name= '" . $database->escape_string($this->last_name) . "'";
        $sql .= " WHERE id= " . $database->escape_string($this->id);

        $database->query($sql);

        
        // if($database->query($sql)){

        //     $this->id = $database->the_insert_id();

        //     return true;

        // } else {

        //     return false;
        // }


       return (mysqli_affected_rows($database->connection) == 1) ? true : false; 
    }  // Update Method

    public function delete(){
        global $database;

        $sql = "DELETE FROM " . static::$db_table . " ";
        $sql .= "WHERE id= " . $database->escape_string($this->id);
        $sql .= " LIMIT 1";

        $database->query($sql);

        return (mysqli_affected_rows($database->connection) == 1) ? true : false; 
    } // Delete Method


    public function count_all(){

        global $database;
        $sql = "SELECT COUNT(*) FROM " . static::$db_table;
        $result_set = $database->query($sql);
        $row = mysqli_fetch_array($result_set);

        return array_shift($row);

    }


}


?>