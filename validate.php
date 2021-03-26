<?php 
require_once "./config.php";



if($_POST && isset($_POST['name']) && isset($_POST['pass'] ))
$payLoad = json_decode(json_encode($_POST));

$val = $database->prepare("SELECT * FROM users WHERE username='$payLoad->name' and user_password='$payLoad->pass'");
if($val->execute())
{
    $result = $val->fetch();
    if( $result && count($result) != 0 )
    {
       $_SESSION['user_logged'] = $result['id'];
       setcookie('user', $result[1],36000, '/');
        header("Location:dashboard.php");
        
    }
    else
    {
        header("Location:login.php");
       
       }
}


?>