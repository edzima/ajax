<?php
$db = new mysqli('localhost', 'majsterw_user', 'U$er2015', 'majsterw_projekt');
if ($mysqli->connect_error) {
    die('Connect Error ('.$db->connect_errno.') '. $db->connect_error);
    if (mysqli_connect_error()) {
       die('Connect Error (' . mysqli_connect_errno() . ') '
       . mysqli_connect_error());
    }
}

$db->set_charset("utf8"); 
?> 