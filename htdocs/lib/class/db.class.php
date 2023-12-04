<?php
class db{
    public static $conn = null;
    public static function makeConnection(){
       
        if(db::$conn==null){
            $servername = get_config('db_server');
            $usernames = get_config('db_username');
            $password = get_config('db_password');
            $dbname = get_config('db_name');
            // Create connection
            $conn = new mysqli($servername, $usernames, $password, $dbname);
             // Check connection
            if ($conn->connect_error) {
                print "Connection failed";
            die("Connection failed: " . $conn->connect_error);
        }else{
            db::$conn = $conn;
            return db::$conn;
        }
        }else{
            return db::$conn;
        }
    }
}
// db::makeConnection();