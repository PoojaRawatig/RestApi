<?php
include_once '../database.php';
include_once '../user.php';

$database = new Database();
$db = $database->getConnection();
$user = new User($db);

$user->username = $_POST['username'];
$user->password = base64_decode($_POST['password']);
$user->created = date('Y-m-d H:i:s');
//cretae the user
if($user->signup()){
    $user_arr=array(
        "status" => true,
        "message" => "successfully signup",
        "id" => $user->id,
        "username"=> $user->username

    );

    
}else{
    $user_arr=array(
        "status" => false,
        "message"=> "username alreasy exists"
    );

}
print_r(json_encode($user_arr));



?>