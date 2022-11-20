<?php require_once('./process.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        .container{
            display: flex;
            flex-direction: column;
            justify-content: center ;
            align-items: center;
            margin-top: 200px;

        }
    </style>
</head>
<body>
    <div class="container">
        <?php require_once "./errors.php";?>

        <form method="POST">

            <input type="text" placeholder="Enter Username" name="username"> <br> <br>
            <input type="password" placeholder="Enter password" name="pass"> <br> <br>

            <button name="btn">Log in</button>
    
        </form>
    </div>
    
    
</body>
</html>