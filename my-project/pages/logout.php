<?php
// Delete the "username" and "password" cookie by setting its expiration time in the past
setcookie("username", "", time() - 3600, "/");
setcookie("password", "", time() - 3600, "/");
header("Location: ../index.php");
exit();
?>
