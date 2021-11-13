<?php

session_start();
session_destroy();
header('Location: footer.php');

?>