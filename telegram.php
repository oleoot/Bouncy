<?php
$name = $_POST['name'];
$email = $_POST['e-mail'];
$subject = $_POST['subject'];
$text = $_POST['text'];
$token = "847208672:AAHRihHYsqQ5VDH_978JuYaO03AGvHvXH-U";
$chat_id = "-340605955";
$arr = array(
  'Имя пользователя: ' => $name,
  'Email:' => $email,
  'Тема: ' => $subject,
  'Текст сообщения: ' => $text,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>
