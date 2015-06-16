<?php
$ip=$_SERVER['REMOTE_ADDR'];
echo "$ip";
?>

<br>

<?php
echo gethostname();
?>
<br>
<?php
$browser=$_SERVER['HTTP_USER_AGENT'];
echo "$browser";
?>
<br>
<?php
echo date('l jS \of F Y h:i:s A');
?>

