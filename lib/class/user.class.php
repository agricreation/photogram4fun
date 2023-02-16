<?php
    class user
    {
        // Signup functions
        public static function signup($username, $password, $email_address, $phone)
        {
            $password = md5($password);
            $conn = db::makeConnection();
            $sql = "INSERT INTO `auth` (`email`, `phone`, `fname`, `password`, `active`)
            VALUES ('$email_address', '$phone', '$username', '$password', '1');";
            $error = false;
            if ($conn->query($sql) === true) {
                $error = false;
            } else {
                // echo "Error: " . $sql . "<br>" . $conn->error;
                $error = $conn->error;
            }
            $conn->close();
            return $error;
        }

        //Login function
        public static function login($email_address, $password)
        {
            $password = md5($password);
            $conn = db::makeConnection();
            $query = "SELECT * FROM `auth` WHERE `email` = '$email_address'";
            $result = $conn->query($query);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if ($row['password'] == $password) {
                    return $row;
                } else {
                    return false;
                }
            }
        }
    }
