<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['number'];


    $to = 'inganico@yandex.ru, seltikc@yandex.ru'; 
    $subject = 'Новая форма заполнена';
    $message = "Пользователь $username с почтой $email заполнил форму.";

    // Добавьте дополнительные заголовки, если необходимо
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Отправить письмо
    mail($to, $subject, $message, $headers);

    echo 'Отправлено письмо ';
} else {
    echo 'Ошибка';
}

?>



