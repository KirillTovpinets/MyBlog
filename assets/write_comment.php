<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
  /* Принимаем данные из формы */
  $name = $_POST["name"];
  $page_id = $_POST["page_id"];
  $text_comment = htmlspecialchars($_POST["comment"]);
  $pagetitle = $_POST["pagetitle"];
  if(isset($_POST["reply_id"])){
      $replyTo = $_POST["reply_id"];
  }else{
      $replyTo = null;
  }
  $ip = $_SERVER["REMOTE_ADDR"];
  $date = date("Y-m-d H:i:s");
  $mysqli = mysqli_connect("127.0.0.1", "s8169", "aBuwEMcam819", "s8169") or die ("Ошибка:". mysqli_connect_error());// Подключается к базе данных
  $mysqli->query("SET NAMES utf8");
  $mysqli->query("INSERT INTO Comments (page_id, name, comment, date, reply_id, ip) VALUES ('$page_id', '$name', '$text_comment', '$date', '$replyTo', '$ip')") or die ("Ошибка записи: ". mysqli_error($mysqli));// Добавляем комментарий в таблицу
  
  mysqli_close($mysqli);
  $to = "kirill.tovpinets@icloud.com";
  $from = "Build Yourself";
  $title = "Новый комментарий в статье";
  $message = "Пользователь с именем $name оставил комментарий к статье \"$pagetitle\": \n\n $text_comment";
  mail($to, $title, $message, 'From:'. $from); 
  header("Location: ".$_SERVER["HTTP_REFERER"]);// Делаем реридект обратно
  ?>