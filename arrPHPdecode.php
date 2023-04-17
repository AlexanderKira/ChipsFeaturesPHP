<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $str = file_get_contents("json.txt"); 
    
    $arr = json_decode($str, true);

    echo '<pre>';
    print_r($arr);
    echo '</pre>';
    ?>
    <div class="container d-flex justify-betwen">
        <a href="index.php">index</a>
        <a href="arr.php">Массив</a>
    </div>
</body>
</html>