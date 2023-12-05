<?php 
    include "lib/load.php"
?> 
<?
if(isset($_GET['logout'])){
  session::destroy();
}
?>
<pre>
<?php 
print_r($_SESSION);
print_r($_GET);
print_r($_POST);
?>
</pre>

<?
usersession::loadTemplate("_header");
?>
  <?php
    load_title("Photogram")
  ?>
<?
usersession::loadTemplate("_section");

?>

<?
usersession::loadTemplate("_cards")
?>
