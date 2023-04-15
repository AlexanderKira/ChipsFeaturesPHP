<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET параметры</title>
</head>
<body>
    <?php

    

    $login = "Alexandr";
    $password = "QWER!@#$";
    $time = date('m-d и время H:i:s');

    echo "<a href='index.php?user=" . urlencode("Привет пользователь $login ваш пароль $password, текущее время: $time") . "'>ссылка</a>";
    

// $url = parse_url($url);

    // echo '<pre>';
    // print_r($url);
    // echo '</pre>';


    // echo $_GET['name'] . "<br>";
    // echo $_GET['age'] . "<br>";

    // http://localhost:3000/getform.php/?name=alexsandr&age=29


    ?>
    <div class="container d-flex justify-betwen">
        <a href="index.php">index</a>
    </div>
</body>
</html>