<?php
    $id = $_GET["id"];
    $mysqli = mysqli_connect("127.0.0.1", "s8169", "aBuwEMcam819", "s8169") or die ("Ошибка:". mysqli_connect_error());// Подключается к базе данных
    $mysqli->query("SET NAMES utf8");
    $result_set = $mysqli->query("SELECT * FROM Comments WHERE page_id='$id'") or die("Ошибка чтения:". mysqli_error($mysqli)); //Вытаскиваем все комментарии для данной страницы
    
    $total = array();
    while($comment = $result_set->fetch_assoc()){
        array_push($total, $comment);
    }
    //$aRes = array('name' => 'фдвыалодло', 'nickname' => 'фывафва');
    
    mysqli_close($mysqli);
    
    echo json_encode($total);
    //echo json_encode($aRes);
?>