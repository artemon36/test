<?php
require_once __DIR__ . '/../helpers.php';

$user = currentUser();

// Подключение к базе данных
$servername = "server127.hosting.reg.ru";
$username = "u2241890_MandoBD";
$password = "mandomemori2022";
$dbname = "u2241890_auth";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$conn->set_charset('utf8');

// Обработка POST-запроса для добавления изменений пользователю

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["replace_mysql_information_admin"])) {
// Получение данных из формы
   $adress = $_POST['adress'];
   $city = $_POST['city'];
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $email = $_POST['email'];
   $userID = $user['id'];
   $password = $_POST['password'];
   $phone = $_POST['phone'];
   $sql = "UPDATE users SET email = '$email', city = '$city', lastname = '$lastname', firstname = '$firstname', adress = '$adress', phone = '$phone', password = '$password' WHERE id = $userID";
  if(mysqli_query($conn, $sql)) {
      setMessage("replace_myself_data", "<i class='fa fa-arrow-up text-success'></i> <font class='text-success'>Данные успешно обновленны!</font>");
      $mess = "/main-panel.php";
      redirect($mess);
  } else {
      setMessage("replace_myself_data_error", "Ошибка данных: ". mysqli_error($conn));
  }
}

// Закрытие соединения с базой данных
mysqli_close($conn);
?>