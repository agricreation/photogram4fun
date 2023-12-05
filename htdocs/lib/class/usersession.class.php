<?php 

class userSession {
    private $conn;
    private $token;
    private $data;
    private $uid;

    public function __construct($token) {
        $this->conn = Database::getConnection();
        $this->token = $token;
        $this->data = null;
        $sql = "SELECT * FROM `session` WHERE `token`='$token' LIMIT 1";
        $result = $this->conn->query($sql);
        if ($result->num_rows) {
            $row = $result->fetch_assoc();
            $this->data = $row;
            $this->uid = $row['uid']; //Updating this from database
        } else {
            throw new Exception("Session is invalid.");
        }
    }

    public static function isAuthorised(){ 
        // $isSetSession = Session::isset('user');
        if (Session::isset('user')) {
            return true;
        }else{
            return false;
        }
    }

    public static function authenticate($user, $pass)
    {
        $username = user::login($user, $pass);
        if ($username) {
            $user = new user($username);
            $conn = db::makeConnection();
            $ip = $_SERVER['REMOTE_ADDR'];
            $agent = $_SERVER['HTTP_USER_AGENT'];
            //Right now temroryly declaring to "dev" insted we need to implemet a fingerprint js here
            // $fingerprint = "dev";
            $fingerprint = $_POST['fingerprint'];
            $token = md5(rand(0, 9999999) . $ip . $agent . time());
            $sql = "INSERT INTO `session` (`uid`, `token`, `login_time`, `ip`, `user_agent`, `active`, `fingerprint`)
            VALUES ('$user->id', '$token', now(), '$ip', '$agent', '1', '$fingerprint')";
            if ($conn->query($sql)) {
                session::set('session_token', $token);
                session::set('fingerprint', $fingerprint);
                session::set('user', $username);
                return $token;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }


    public static function loadTemplate($page) {
        {
            include __DIR__."/../../_templates/$page.php";
        }
    }

}