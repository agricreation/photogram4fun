<?php
class db{
    public static $conn = null;
    public static function makeConnection(){
        echo(get_config('db_server'));
        echo(get_config('db_username'));
        echo(get_config('db_password'));
        echo(get_config('db_name'));
        return;
        if(db::$conn==null){
            $servername = get_config('db_server');
            $usernames = get_config('db_username');
            $password = get_config('db_password');
            $dbname = get_config('db_name');
            echo($servername);
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
db::makeConnection();