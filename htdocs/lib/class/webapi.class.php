<?php


class webapi{
    public function __construct(){
        // print("php_sapi_name");
        global $__site_config;
        $__site_config_path = __DIR__.'/../../../projects/photogramconfig.json';
        $__site_config = file_get_contents($__site_config_path);
        db::makeConnection();
    }

    public function initiateSession()
    {
        Session::start();
        // if (Session::isset("session_token")) {
        //     try {
        //         Session::$usersession = UserSession::authorize(Session::get('session_token')); 
        //     } 
        //     catch (Exception $e){
        //     }
        // }
    }

}