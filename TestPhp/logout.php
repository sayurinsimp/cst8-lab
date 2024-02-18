
<?php
session_start();
$_SESSION = array();
session_destroy();
header("Location: sample.php?logout=1");
exit("Sucessfully logged out.");

?>