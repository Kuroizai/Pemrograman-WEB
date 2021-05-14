<?php
session_start();
include 'base.php';
if (isset($_COOKIE['uname']) && isset($_COOKIE['passwd'])){
    $_SESSION['auth'] = biscuits();
    echo $_SESSION['auth'];
    if ($_SESSION['auth']){
        //     $mail = $_POST['username'];
        //     $password = $_POST['password'];
        //     setcookie('mail',$mail,time()+(60));
        //     setcookie('passwd',$password,time()+(60));
            header('Location: home.php');
            exit;
    }
}else{
    $uname = $_POST['username'];
    $password = $_POST['password'];
    setcookie('uname',$uname,time()+60,'/');
    setcookie('passwd',$password,time()+60,'/');
    header('Location: control.php');
    // exit;

}

    
?>