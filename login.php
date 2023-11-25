<?php
include_once '..database.php';
include_once '..user.php';

//get database connection
$database = new Database();
$db = $database->getConnection();
//prepare user objects
$user = new User($db);
//set id property of user to be edited
$user->username = isset($_GET['$username']) ? $_GET['$username'] : die();
$user->password = base64_decode(isset($_GET['password']) ? $_GET['password'] : die());
//read the details of user to be edited
$stmt = $user->login();
if ($stmt->rowCount() > 0) {

}

?>