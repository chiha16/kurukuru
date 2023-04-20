<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'chihaboo20070116@gmail.com';
  $subject = 'お問い合わせがありました';
  $body = "名前: $name\n\nメールアドレス: $email\n\nメッセージ:\n$message";

  if(mail($to, $subject, $body)) {
    echo 'メッセージが送信されました。';
  } else {
    echo 'メッセージの送信に失敗しました。';
  }
}
?>