<?php
    try{
        $host = 'localhost';
        $user = 'root';
        $pw = '';
        $dbname = 'mypc';
        $myconn = new PDO("mysql:host=".$host.";dbname=".$dbname,
                            $user,$pw
                        );
        $myconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);         
    }catch(\Exception $e){
        echo $e->getMessage();
    }

    function get_columns(){
        global $myconn;
        $stmt = $myconn->prepare('SELECT * FROM akun ORDER BY ID');
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
?>