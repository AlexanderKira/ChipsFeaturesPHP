<header>
<a href="form_input.php">Назад</a><br>
</header>

<?php


// if ($_FILES['filename']['size'] > 2 * 1024 * 1024) { 
// 	exit('Размер файла превышает 2Мб');
// }elseif (move_uploaded_file($_FILES['filename']['tmp_name'], 'temp/' .$_FILES['filename']['name'])) {
// 	echo 'Файл загружен на сервер<br>';
// 	echo 'Характеристики файла:<br>';
// 	echo 'Имя файла:<br>';
// 	echo $_FILES['filename']['name'] . '<br>';
// 	echo 'Размер файла:<br>';
// 	echo $_FILES['filename']['size'] . '<br>';
// 	echo 'Тип файла:<br>';
// 	echo $_FILES['filename']['type'];
// }else{
// 	echo 'Файл не загружен на сервер';
// }


// $_FILES['userfile']['name']
// Оригинальное имя файла на компьютере клиента.

// $_FILES['userfile']['type']
// Mime-тип файла, в случае, если браузер предоставил такую информацию. 
// В качестве примера можно привести "image/gif". 
// Этот mime-тип не проверяется на стороне PHP, так что не полагайтесь на его значение без проверки.

// $_FILES['userfile']['size']
// Размер в байтах принятого файла.

// $_FILES['userfile']['tmp_name']
// Временное имя, с которым принятый файл был сохранён на сервере.

// $_FILES['userfile']['error']
// Код ошибки, которая может возникнуть при загрузке файла.

// $_FILES['userfile']['full_path']
// Полный путь, представленный браузером. 
// Это значение не всегда содержит реальную структуру каталогов и ему нельзя доверять. 
   

//загружаем фаил в папку temp 
// if(move_uploaded_file($_FILES['filename']["tmp_name"] , "temp/" . $_FILES['filename']["name"])){
    //считываем данные файла в строку и присваиваем переменную
    // $log = file_get_contents("temp/" . $_FILES['filename']["name"]);
    //преобразуем строку в массив
    // $arr = explode("\n", $log);
    //возможно это для удаление лишних пробелов
    // unset($arr[count($arr)-1]);
    
    // foreach($arr as $key => $value){
        //удаляет закрывающие скобки
        // $arr2 = explode("]", $value);
        // присваиваем переменные к элементам двумерного массива 
        // foreach($arr2 as $key1 => $value1){
        //     $var1 = $arr2[0] . "<br>";
        // }
        // foreach($arr2 as $key1 => $value1){
        //     $var2 = $arr2[1] . "<br>";
        // }
        // foreach($arr2 as $key1 => $value1){
        //     $var3 = $arr2[2] . "<br>";
        // }
        // substr удаляет ненужные символы вначале строки  
//         echo "a. " . "Time " . substr($var1, 1);
//         echo "b. " . substr($var2, 2);
//         echo "c. " . "Write " . $var3;
//     }
// }

// $str = file_get_contents("temp/chatlog_2019-12-04.txt"); 
// echo $str;
// $arr = explode("\n", $str);

// echo "<pre>";
// print_r($arr);
// echo "<pre>";

// for ($i=0; $i < count($arr); $i++) {
//         echo $arr[$i] . "<br>";
//     };


// if (move_uploaded_file($_FILES['filename']['tmp_name'], 'temp/' . $_FILES['filename']['name'])){
//     if ($_FILES['filename']['size'] > 2 * 1024 * 1024) {
//         echo 'Размер файла превышает 2 мегабайта';
//         exit();
//     }else{
//         echo 'Файл загружен на сервер<br>';
//         echo 'Характеристики вашего файла:<br>';
//         echo 'Имя файла';
//         echo $_FILES['filename']['name'] . '<br>';
//         echo 'Размер файла:';
//         echo $_FILES['filename']['size'] . '<br>';
//         echo 'Тип файла';
//         echo $_FILES['filename']['type'] . '<br>';
//     }
// }





// все проверки стоит усовершенствовать  
// if(!empty($_POST)) {
// 	if(!empty($_POST['fio'])) {
// 		echo "Ваше ФИО: ".$_POST['fio'] . "<br>";
// 	}else {
// 		echo "Поле ФИО пустое" . "<br>";
// 	}
// 	if(!empty($_POST['age'])){
// 		echo "Ваш возраст: ".$_POST['age'] . "<br>";
// 	}else {
// 		echo "Поле возраста пустое" . "<br>";
// 	}
// 	if(!empty($_POST['education'])){
// 		echo "Ваше образование: " . $_POST['education'] . "<br>";
// 	}else {
// 		echo "Поле образования пустое" . "<br>";
// 	}
// 	if(!empty($_POST['gender'])){
// 			echo "Ваш пол: " . $_POST['gender'] . "<br>";
// 	}else {
// 		echo "Поле пола пустое" . "<br>";
// 	}
// 	if(!empty($_POST['languages'])) {
// 		echo "Вы знаете: ";
// 		foreach($_POST['languages'] as $value){
// 			echo " " . $value . " ";
// 		}
// 		echo "<br>";
// 	}else {
// 		echo "Поле языка пустое" . "<br>";
// 	}
// 	if(!empty($_POST['captcha'])){
// 		if($_POST['captcha'] == 9){
// 			echo "Капча введена верно";
// 		}else{
// 			echo "Капча введена неверно";
// 		}
// 	}else{
// 		echo "Поле капчи пустое" . "<br>";
// 	}
// }

// if (!empty($_POST)) {
//     if (empty($_POST['name'])) {
//         $errors[] = 'Поле name пустое' . "<br>";
//     }else{
// 		$name = $_POST['name'];
// 		$arr = preg_split('//u',$name,-1,PREG_SPLIT_NO_EMPTY);      // Разбивает строку на массив символов, в отличии от str_split нормально работает с кириллицей
// 		foreach($arr as $key => $value){
// 			if(is_numeric($value)){
// 				$errors[] = "Символ номер " . ($key+1) .  " не является строкой";
// 			}
// 		}
// 	}
    

//     if (empty($_POST['age'])) {
//         $errors[] = 'Поле age пустое' . "<br>";
//     }elseif (!is_numeric($_POST['age'])) {
//         $errors[] = 'Поле age не заполено';
//     }

//     if (empty($_POST['password'])) {
//         $errors[] = 'Поле password пустое'. "<br>";
//     }elseif (!is_numeric($_POST['password'])) {
//         $errors[] = 'Поле password не заполено';
//     }

//     if (!empty($errors)) {
//         foreach ($errors as $err) {
//             echo "<strong>$err</strong>";
//         }
//     }else {
//         echo "<pre>";
//         print_r($_POST);
//         echo "<pre>";
//     }

// }


// $time = date('m-d и время H:i:s');
// $name = $_POST["msg"];
// echo htmlspecialchars ("Привет $name, сегодня $time, спасибо");

session_start();

$sName = $_POST['username']; // введенные пользователем данные передаются методом post, записываем их в переменную

$_SESSION['username'] = $sName; //передаем это имя в сессию, ключ - произвольный

if(isset($_SESSION['username'])){ // если у нас есть че в сессии, то выводим это
    $hi = 'Привет, ' . $_SESSION['username'];
    print_r($hi);
}
if(empty($_SESSION['username'])){ //если нет, то не судьба
    echo "пусто";
}

?>