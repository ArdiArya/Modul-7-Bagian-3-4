<?php

session_start();

session_destroy();

header("location: Form-Login.php");

?>