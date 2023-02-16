<?php
    //load all files from templates
    function load($page)
    {
        include __DIR__."/../_templates/$page.php";
    }
    ?>
<?php
    //Including class files
    include_once __DIR__."/class/mic.class.php";
    include_once __DIR__."/class/db.class.php";
    include_once __DIR__."/class/user.class.php";
    include_once __DIR__."/class/session.class.php";
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