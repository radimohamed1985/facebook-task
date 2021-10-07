<?php
session_start();

session_unset();

session_destroy();
header('location:/dashboard/facebook/index.php');

exit();

