
<?php
include "./config.php";
session_start();
session_unset();
setcookie("id", "", time() - 3600);
   $_COOKIE['id'] = "";
session_destroy();
header("Location:./index.php");

?>