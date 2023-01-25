<?php

    class user{
        // Signup functions
        public static function signup($username, $password, $email_address, $phone)
        {
            print("$email_address <br>");
            print("$username <br>");
            print("$phone <br>");
            print("$password <br>");
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
    }