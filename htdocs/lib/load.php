<?php
    //Including class files
    include_once __DIR__."/class/db.class.php";
    include_once __DIR__."/class/user.class.php";
    include_once __DIR__."/class/session.class.php";
    include_once __DIR__."/class/usersession.class.php";
    include_once __DIR__."/class/webapi.class.php";
    include_once __DIR__."/class/post.class.php";
    include_once __DIR__."/app/Like.class.php";
    include_once __DIR__."/class/REST.class.php";
    include_once __DIR__."/class/API.class.php";

    ?>
<?php
    //load all files from templates
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$agent = $_SERVER['HTTP_USER_AGENT'];

global $__site_config;
$wapi = new webapi();
$wapi->initiateSession();
print_r($_SESSION);

// print_r($agent);
    ?>

<?php
    ?>
<?php
    //load tittle
    function load_title($title)
    {
        print "<title>$title</title>";
    }
    function get_config($key)
        {
    global $__site_config;
    $array = json_decode($__site_config, true);
    if (isset($array[$key])) {
        return $array[$key];
    } else {
        return null;
    }
}
    ?>