<?php

include '/xampp/htdocs/dashboard/facebook/includes/connect.php';
if($_SERVER['REQUEST_METHOD']=='POST'){ /**inserting in to data base  */
    $username= filter_var( $_POST['user'],FILTER_SANITIZE_STRING);
    $pass= sha1($_POST['password']);
    $phone= $_POST['phone'];
    $st =$con->prepare("INSERT INTO `users`(`username`, `password`, `phone`) VALUES ('$username','$pass','$phone')");
    $st->execute();
    header('location:/dashboard/facebook/index.php');

}