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
load("_header");
?>
  <?php
    load_title("Photogram")
  ?>
<?
load("_section");

?>

<?
load("_cards")
?>
