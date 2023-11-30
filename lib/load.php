<?php
    //load all files from templates
    ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$agent = $_SERVER['HTTP_USER_AGENT'];
print_r($agent);
    function load($page)
    {
        include __DIR__."/../_templates/$page.php";
    }
    ?>
<?php
    //Including class files
    include_once __DIR__."/class/db.class.php";
    include_once __DIR__."/class/user.class.php";
    include_once __DIR__."/class/session.class.php";
    include_once __DIR__."/class/usersession.class.php";
    ?>
<?php
    session::start();
    ?>
<?php
    //load tittle
    function load_title($title)
    {
        print "<title>$title</title>";
    }

    ?>