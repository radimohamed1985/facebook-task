<?php

include '/xampp/htdocs/dashboard/facebook/includes/connect.php';
if($_SERVER['REQUEST_METHOD']=='POST'){ /**inserting in to data base  */
    $username= $_POST['user'];
    $pass= sha1($_POST['password']);
    $phone= $_POST['phone'];
    $st =$con->prepare("INSERT INTO `users`(`username`, `password`, `phone`) VALUES ('$username','$pass','$phone')");
    $st->execute();
    header('location:/dashboard/facebook/index.php');
}