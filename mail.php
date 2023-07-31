<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные из формы
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    
    // Формируем сообщение
    $message = "Имя: " . $name . "\n";
    $message .= "Телефон: " . $phone . "\n";
    $message .= "E-mail: " . $email . "\n";
    
    // Определяем получателя и тему письма
    $to = "nmn@madstack.ru"; // Здесь указываем адрес, на который нужно отправить письмо
    $subject = "Обратный звонок";
    
    // Заголовки письма
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";
    
    // Отправка письма
    if (mail($to, $subject, $message, $headers)) {
        echo "Сообщение успешно отправлено!";
    } else {
        echo "При отправке сообщения произошла ошибка.";
    }
} else {
    echo "Доступ запрещен.";
}
?>