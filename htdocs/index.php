<?php 
    include "lib/load.php"
?> 
<?
if(isset($_GET['logout'])){
  session::destroy();
  header("Location: index.php");
}
?>


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
