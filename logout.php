<?php
require('./connect.php');
// set the user session to null
$_SESSION['user']=null;
// redirect to home page
header('Location:'.URLROOT);
?>