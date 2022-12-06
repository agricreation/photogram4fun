<?php

    //load all files from templates
    function load($page)
    {
        include __DIR__."/../_templates/$page.php";
    }

    //load tittle
    function load_title($title)
    {
        print "<title>$title</title>";
    }

    // Signup functions
    function signup($username, $password, $email_address, $phone)
    {
        print("$email_address <br>");
        print("$username <br>");
        print("$phone <br>");
        print("$password <br>");

        
    $servername = "mysql.selfmade.ninja";
    $username = "agritechs";
    $password = "ZACd6npSuQyU5pN";
    $dbname = "agritechs_auth";

           // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

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
?>
<!-- <?php
    // signup("agrasdfi","passwasdford","asfemail","12241534");
?> -->

