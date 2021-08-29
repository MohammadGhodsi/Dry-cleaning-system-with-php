<?php 
require_once('./classes/user.php');
if(isset($_POST['username']) && isset($_POST['password']))
{



    $username = $_POST['username'];
    $password = $_POST['password'];
    /* for a unique password */
    $password = md5($password);

    $result = $user->login($username,$password);
    $return['valid'] = false;

    if($result >0)
    {
        $return['valid'] = true;
        $return['url'] = 'pages/home.php';
        $_SESSION['user_logged'] = $result['user_id'];
    }
    echo json_encode($return);
}
