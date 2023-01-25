<?php
include "lib/load.php"
?>
<?php

// print($_GLOBALS);
// print_r("$_GLOBALS");

// print($_REQUEST);
// print($_POST);
// print($_GET);
// print($_FILES);
// print($_ENV);
// print($COOKIES);
// print($_SESSION);

if(isset($_GET['clear'])){
    print("clearing a value");
    session::unset();
}
print("🤪".session::get('a'));
if (session::isset('a')) {
    print("🗃️> Already assigned 👍".session::get('a'));
} else {
    session::set('a', time());
    print("Assigning a new value 👉".session::get('a'));
}
if(isset($_GET['destroy'])){
    print "  Destroying....🤪";
    session::destroy();
}

?>