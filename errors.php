<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="css/errors.css">
    <style>
        .error {
            text-align: center;
            background-color: red;
            color: white;

        }
    </style>
</head>
<body>
<?php
if(count($errors)>0):  ?>
    <div class="error">

        <?php foreach($errors as $error):  ?>
        <p> <?php echo $error ?></p>
        <?php endforeach; ?>
    
    </div>

<?php  endif  ?>

    
</body>
</html>