<?php
include 'conn.php';

function create_header($title,$style = 'style.css'){
    echo <<<EOT
    <!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>$title</title>
            <link href=$style rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="style.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="crossorigin="anonymous"></script>
        </head>
        <body>
    EOT;
}

function create_footer(){
    echo <<<EOT
        </body>
    </html>
    EOT;
}

function biscuits(){
    if (isset($_COOKIE['uname']) && isset($_COOKIE['passwd'])){
        // echo 'Alredy Set';
        $mail = $_COOKIE['uname'];
        $passwd = $_COOKIE['passwd'];

        $res = get_columns();
        // print_r($res);

        foreach($res as $data){
            // print_r($data);
            $auth = (($mail == $data['Username']) && ($passwd == $data['Password']))? TRUE: FALSE;
            // echo $_SESSION['auth'].'<br>';
            // echo $auth;
            if ($auth){
                echo $auth;
                return $auth;
            }
        }
    }
}

function out_of_biscuits(){
    session_start();
    $_SESSION=[];
    session_unset();
    session_destroy();

    setcookie('uname', '', time() - 3600 ,'/');
    setcookie('passwd', '', time() - 3600 ,'/');

    header('location: index.php');
    exit;
}

?>