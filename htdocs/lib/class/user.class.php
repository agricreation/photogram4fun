<?php
    class user
    {
        private $conn;
        public $id;
        public $username;
        // __call function
        public function __call($name, $arguments)
    {
        $property = preg_replace("/[^0-9a-zA-Z]/", "", substr($name, 3));
        $property = strtolower(preg_replace('/\B([A-Z])/', '_$1', $property));
        if (substr($name, 0, 3) == "get") {
            return $this->_get_data($property);
        } elseif (substr($name, 0, 3) == "set") {
            return $this->_set_data($property, $arguments[0]);
        }
    }

    public function __construct($username)
    {
        $this->conn = db::makeConnection();
        $this->username = $username;
        $this->id = null;
        $sql = "SELECT `id` FROM `auth` WHERE `fname`= '$username' LIMIT 1";
        $result = $this->conn->query($sql);
        if ($result->num_rows) {
            $row = $result->fetch_assoc();
            $this->id = $row['id']; //Updating this from database
        } else {
            throw new Exception("Username does't exist");
        }
    }

    //this function helps to retrieve data from the database
    private function _get_data($var)
    {
        if (!$this->conn) {
            $this->conn = db::makeConnection();
        }
        $sql = "SELECT `$var` FROM `users` WHERE `id` = $this->id";
        $result = $this->conn->query($sql);
        if ($result and $result->num_rows == 1) {
            return $result->fetch_assoc()["$var"];
        } else {
            return null;
        }
    }
    //This function helps to  set the data in the database
    private function _set_data($var, $data)
    {
        if (!$this->conn) {
            $this->conn = db::makeConnection();
        }
        $sql = "UPDATE `users` SET `$var`='$data' WHERE `id`=$this->id;";
        if ($this->conn->query($sql)) {
            return true;
        } else {
            return false;
        }
    }

        // Signup functions
        public static function signup($username, $password, $email_address, $phone)
        {
            $password = password_hash($password, PASSWORD_BCRYPT);
            $conn = db::makeConnection();
            $sql = "INSERT INTO `auth` (`email`, `phone`, `fname`, `password`, `active`)
            VALUES ('$email_address', '$phone', '$username', '$password', '1');";
            $error = false;
            if ($conn->query($sql) === true) {
                $error = false;
            } else {
                $error = $conn->error;
            }
            $conn->close();
            return $error;
        }

        //Login function
        public static function login($email_address, $password)
        {
            $conn = db::makeConnection();
            $query = "SELECT * FROM `auth` WHERE `email` = '$email_address'";
            $result = $conn->query($query);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if (password_verify($password, $row['password'])) {
                    return $row['fname'];
                } else {
                    return false;
                }
            }
        }
    }
