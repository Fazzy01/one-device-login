<?php
    session_start();
    
    $server = mysqli_connect('localhost', 'root', '', 'onedevice') or die('no database found');
    // $time = Time();
    // $str = "ABCDEFGHIJKLMNabcdefghijklmn";
    // $shuffle = str_shuffle($str);
    // $realshuffle = substr($shuffle, 10);
    // $random = rand(1000,30000);

    // echo $time;
    // echo $random;
    // echo $shuffle;

    // echo $realshuffle;
    // print_r($str);

    // $key = $time.$realshuffle.$random;
    // echo $key;
    $sessionKey2 = $_SESSION['key'];
    $userName2 = $_SESSION['user'];
    echo "successful thing";

    $sqlsql = "SELECT * FROM dewise WHERE username = '$userName2' sessionkey='$sessionKey2' ORDER by id DESC LIMIT 1";
    // $res = $server->query($sqlsql);
    $rowcount = $res->mysqli_num_rows();
    
    if($rowcount <> 0){
        echo "nothing here";
        header("location : login.php");
    }
    while($row=mysqli_fetch_assoc($res)){
        echo $row['sessionkey'];
        if($row['sessionkey']<>$sessionKey2){
            session_destroy();
        }
    }
    // echo ""; 
    //$row = mysqli_fetch_assoc($res);
    // $row = $res->fetch_assoc();

    // if($row['']){
    //     echo "nothing here";
    //     header("location : login.php");
    // }
    // else{
    //     if($sessionKey2<>$row['sessionkey']){
    //         session_destroy();
    //     }
    // }

?>