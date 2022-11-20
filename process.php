<?php
    session_start();

    $server = mysqli_connect('localhost', 'root', '', 'onedevice') or die('no database found');
    $errors = array();
    // if($server){
    //     echo "fine";
    // }

    if(isset($_POST['btn'])){
        $userName = mysqli_real_escape_string($server, $_POST["username"]) ;
        $password = mysqli_real_escape_string($server, $_POST["pass"]) ;


        if(empty($userName)){array_push($errors, "uesrname required !!");}
        if(empty($password)){array_push($errors, "password required !!");}

        $id = "";
        $sql = "SELECT * FROM user WHERE username='$userName' AND password='$password' ";
        $result = $server->query($sql);

        if(mysqli_num_rows($result)!=1){
            // $_SESSION['header'] = "header";
            // header ("location: index.php");
            array_push($errors, "incorrect username or password !!");
        }
        // else{
            
        // }
  
    
        if(count($errors)==0){
            // echo "no error";
            $time = time();
            $str = "ABCDEFGHIJKLMNabcdefghijklmn";
            $shuffle = str_shuffle($str);
            $realshuffle = substr($shuffle, 10);
            $random = rand(1000,30000);

            $sessionKey = $time.$realshuffle.$random;
            // echo $sessionKey;

            // CREATE TABLE IF NOT EXISTS device(
            //     id INTEGER PRIMARY KEY,
            //     username VARCHAR(100) NOT NULL,
            //     pass VARCHAR(100) NOT NULL
            // );

            $tambaya = "INSERT INTO dewise (id, username, sessionkey) VALUES (NULL, '$userName', '$sessionKey') ";

            $res = $server->query($tambaya) ;
        
            if($res){
                $_SESSION['key'] = $sessionKey;
                $_SESSION['user'] = $userName;
                 header("Location: success.php"); 
                // echo "i have push to db";
               
            } 
        }
    


        

    }
    
    

?>