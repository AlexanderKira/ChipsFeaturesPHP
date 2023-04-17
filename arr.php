<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массив</title>
</head>
<body>
<?php

$school = [
        "class1" => ["Вася Пупкин", "Женя Свистунов", "Дима Рябочкин", "Вова Борисоль", "Петя Пробкин", "Андрей Филатов"],
        "class2" => ["Вася Пупкин1", "Женя Свистунов1", "Дима Рябочкин1", "Вова Борисоль1", "Петя Пробкин1", "Андрей Филатов1"],
        "class3" => ["Вася Пупкин2", "Женя Свистунов2", "Дима Рябочкин2", "Вова Борисоль2", "Петя Пробкин2", "Андрей Филатов2"]
    
    ];

$contents = "json.txt";


$current = json_encode($school, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);  

// echo $current;

file_put_contents($contents, $current);


foreach ($school as $key => $valarr) {
    echo "<b>$key</b><br>";
    foreach ($valarr as $value) {
        echo "<li>$value</li>";
    }
}



foreach ($school as $key => $valarr) {
    echo "<b>$key</b><br>";
    for ($i=0; $i<count($valarr); $i++) {
        if ($i = $valarr[3]){
            echo $valarr[3];
        }
        else{
            echo "error";
        }
    }
}

   



?>
<header>
    <div class="container d-flex justify-betwen">
        <a href="index.php">index</a>
        <a href="PHPdecode.php">PHP decode</a> 
    </div>

</header>
</body>
</html>