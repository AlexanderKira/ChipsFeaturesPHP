<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML формы</title>
</head>
<body>

    <header>
        <a href="index.php">Назад</a> 
    </header>
<!-- <form action="form.php" method="post" enctype="multipart/form-data">
<input type="file" name="filename"><br>
<input type="submit" value="Отправить">
</form> -->



<form action="form.php" method="post" enctype="multipart/form-data">
    <input type="text" name="username"></p>
    <input type="submit" value="Отправить">
    </form>


    <!-- <form action='form.php' method='post'>
        <p>ФИО:  <input type="text" name="fio"></p>
        <p>Возраст:  <input type="text" name="age"></p>
        <p>Образование:  <select name="education" size="1">
                <option value="Среднее школьное">Среднее школьное</option>
                <option value="Полное школьное">Полное школьное</option>
                <option value="Среднее профессиональное">Среднее профессиональное</option>
                <option value="Высшее профессиональное">Высшее профессиональное</option>
            </select></p>
        <p>Пол:  Мужской<input type="radio" name="gender" value="Мужской"> Женский<input type="radio" name="gender" value="Женский"> </p>
        <p>Языки:  <select name="languages[]" multiple size="2">
                <option value="Русский">Русский</option>
                <option value="Английский">Английский</option>
                <option value="Немецкий">Немецкий</option>
                <option value="Испанский">Испанский</option>
                <option value="Французский">Французский</option>
            </select></p>
        <p>Капча: 5+четыре = <input type="text" name="captcha">  </p>
        <input type='submit' vаluе='Отправить'>
    </form> -->
    <!-- <form action="form.php" method="post">
        <input name="name" type="text"><br>
        <input name="age" type="text"><br>
        <input name="password" type="password"><br>

        <select name="period[]" multiple="multiple">
            <option>Сделайте свой выбор</option>
            <option value="30" name="month">месяц</option>
            <option value="180" name="year/2">пол года</option>
            <option value="360" name="year">год</option>
        </select><br>

        <input type="radio" name="slide1" value="1">
        <input type="radio" name="slide2" value="2">
        <input type="radio" name="slide3" value="3"><br>

        <input type="submit" value="отправить">
    </form> -->



    <!-- <form action="form.php" method="post">
        Как вас зовут?<br>
        <textarea name="msg" cols="50" rows="5"></textarea><br>
        <input type="submit" value="отправить">
    </form> -->
</body>
</html>