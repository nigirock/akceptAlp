<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['name'])) {$name = $_POST['name'];}
    if (isset($_POST['email'])) {$email = $_POST['email'];}
    if (isset($_POST['phone'])) {$phone = $_POST['phone'];}

    if (isset($_POST['name_work'])) {$name_work = $_POST['name_work'];}
    if (isset($_POST['phone_work'])) {$phone_work = $_POST['phone_work'];}
    if (isset($_POST['email_work'])) {$email_work = $_POST['email_work'];}
    if (isset($_POST['text_work'])) {$text_work = $_POST['text_work'];}

    if (isset($_POST['name1'])) {$name1 = $_POST['name1'];}
    if (isset($_POST['phone1'])) {$phone1 = $_POST['phone1'];}


    if(isset($_POST['name']) && isset($_POST['phone'])&& isset($_POST['email'])){
        $message = "<h1 style='color: #00b3ee;font-style: italic'>ЗАКАЗАТЬ БЕСПЛАТНЫЙ ВЫЕЗД СПЕЦИАЛИСТА</h1>
            <h3 style='color:blue'>Имя: $name</h3>
            <h3 style='color: green'>Телефон: $phone</h3>
            <h3 style='color: orange'>E-mail: $email</h3>";
    }

    if(isset($_POST['name1']) && isset($_POST['phone1'])){
        $message = "<h1 style='color: #00b3ee;font-style: italic'>ЗАКАЗАТЬ ЗВОНОК</h1>
            <h3 style='color:blue'>Имя: $name1</h3>
            <h3 style='color: green'>Телефон: $phone1</h3>";
    }

    if(isset($_POST['name_work']) && isset($_POST['phone_work']) && isset($_POST['email_work']) && isset($_POST['text_work'])){
        $message = "<h1 style='color: #00b3ee;font-style: italic'>Вакансия</h1>
            <h3 style='color:blue'>Имя: $name_work</h3>
            <h3 style='color: green'>Телефон: $phone_work</h3>
            <h3 style='color: orange'>E-mail: $email_work</h3>
            <h3>О себе: $text_work</h3>";
    }

    $to = "1911956@mail.ru"; /*Укажите ваш адрес электронной почты*/
    $headers = "Content-type: text/html; charset = utf-8";
    $subject = "Высотные работы";
    $send = mail ($to, $subject, $message, $headers);
    if ($send == 'true')
    {
        echo "<center>Спасибо за отправку вашего сообщения!</center>";
    }
    else
    {
        echo "<center><b>Ошибка. Сообщение не отправлено!</b></center>";
    }
} else {
    http_response_code(403);
    echo "Попробуйте еще раз";
}
?>