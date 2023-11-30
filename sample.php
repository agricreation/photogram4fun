<?php
include "lib/load.php"
?>

<pre>
<?php 
print_r($_SERVER);


$ip = $_SERVER['REMOTE_ADDR'];
$agent = $_SERVER['HTTP_USER_AGENT'];
$fingerprint = $_POST['fingerprint'];

$token = md5(rand(0, 9999999) . $ip . $agent . time());

?>
</pre>

?>