<?php 
    include "lib/load.php";

    $email_address = 'admin@gmail.com';
    $password = 'admin';
    $login = null;
    if(isset($_GET['logout'])){
        session::destroy();
        die ('session destroyed Login again <a href="playground.php">Login from here</a>');
    }
    if(session::get("is_login")){
        $userdata = session::get('user_sessions');
        $login = user::login($email_address, $password);
        echo "Welcome back $login[fname]";
        echo '<br> <br> <a href="playground.php?logout">logut<?a>';
    }else{
        echo "No session found loggin in please wait...   ";
        $login = user::login($email_address, $password);
        if($login){
            echo "Login success / welcome $login[fname]";
            session::set('is_login',true);
            session::set('user_sessions', $login);
        }else{
            echo "Login fail \ check your username or password";
        }
    }


?> 
