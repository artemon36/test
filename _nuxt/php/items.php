<?php

require_once __DIR__ . '../../../src/helpers.php';

$user = currentUser();

// установимчасовой пояс по умолчанию
date_default_timezone_set('UTC');

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["slots_servis"])) {

    //В переменную $token нужно вставить токен, который нам прислал @botFather
    $token = "7471938363:AAFNTU7aez75XK7SmJ1Q2bZqetj45GLkiOI";

    //Сюда вставляем chat_id
    $chat_id = "1999094746";

    //Определяем переменные для передачи данных из нашей формы
    if ($_POST['act'] == 'order') {
        $firtsname = ($user['firstname']) ?? "Отсувстуют даные";
        $lastname = ($user['lastname']) ?? "Отсувстуют даные";
        $us_id = ($user['id']) ?? "Отсувстуют даные";
        $slots = ($_POST['slots']) ?? "Отсувстуют даные";

        //Собираем в массив то, что будет передаваться боту
        $arr = [
            'Заказ с mandomemori.ru от:' => NULL,
            'Имя покупателя:' => $firtsname,
            'Фамилия покупателя:' => $lastname,
            'ID-пользователя:' => $us_id,
            'Услуга заказа:' => $slots,
            'Дата заказа:' => date('d.m.Y')." Время: ". date('H:i:s')
        ];
        
        // Форматируем сообщение для Telegram
        $message = implode('%0A', array_map(
            function($key, $value) {
                return "<b>{$key}</b> {$value}";
            },
            array_keys($arr),
            $arr
        ));

        //Передаем данные боту
        $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$message}", "r");

        //Выводим сообщение об успешной отправке
        if ($sendToTelegram) {
            echo "<script>alert('Спасибо! Вы успешно оформили заказ, с вами свяжеться консультант!');</script>";
        }

        //А здесь сообщение об ошибке при отправке
        else {
            echo "<script>alert('Что-то пошло не так. ПОпробуйте отправить форму ещё раз.');</script>";
        }
    }
}

?>