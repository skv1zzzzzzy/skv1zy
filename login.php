<?php
require_once('connect.php');

$login = $_POST['login'];
$password = $_POST['password'];

if (empty($login) || empty($password)){
    echo "Заполните все поля";
} else {
    $query = "SELECT * FROM regusers WHERE login = '$login' AND password = '$password' ";
    $result = mysqli_query($link, $query);

    if($result -> num_rows > 0){

        while($row = $result -> fetch_assoc()){
            echo "Добро пожаловать, " . $row['login'] . "!";
        }
    } else {
        echo "Нет такого пользователя";
    }
}
?>