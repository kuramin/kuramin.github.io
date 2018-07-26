<?php
if (mail("zeropunkt@ya.ru", "Mail from me", "yahoo")) {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>
