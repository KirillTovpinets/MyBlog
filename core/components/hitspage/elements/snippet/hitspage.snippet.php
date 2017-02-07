<?php
/**
 * This file is extra HitsPage Pageviews for MODX Revolution.
 *
 * @copyright Copyright (C) 2013, Artdevue Ltd, <info@artdevue.com>
 * @author Valentin Rasulov <info@artdevue.com>
 * @license http://opensource.org/licenses/gpl-2.0.php GNU Public License v2
 * @package hitspage
 *
 */
$ip = $_SERVER["REMOTE_ADDR"];
$client = $_SERVER["HTTP_USER_AGENT"];
$host = "127.0.0.1";
$dbname = "s8169";
$pass = "aBuwEMcam819";
$username = "s8169";
$date = date("Y-m-d H:i:s");

$page =  $modx->getObject('modResource', $modx->resource->get('id'));
$view = 0;

$mysqli = mysqli_connect($host, $username, $pass, $dbname) or die ("Ошибка: " . mysqli_connect_error());
$pageId = $page->get('id');
$result = $mysqli->query("SELECT * FROM Visitors WHERE ip='$ip' AND client='$client' AND page_id='$pageId'") or die ("Ошибка: " . mysqli_error($mysqli));

// Check the option to record in TV
if($saveTv == 'true' && $result->{"num_rows"} == 0) {
    
    $mysqli = mysqli_connect($host, $username, $pass, $dbname) or die ("Ошибка: " . mysqli_connect_error());
    $mysqli->query("INSERT INTO Visitors (ip, client, page_id, date) VALUES ('$ip','$client', '$pageId', '$date')") or die ("Ошибка записи: " . mysqli_error($mysqli));
    mysqli_close($mysqli);
    
    // get the required TV object by name (or id)
    $tv = $modx->getObject('modTemplateVar',array('name'=>'HitsPage'));
    if($tv) {
        $tvs = $modx->getObject('modTemplateVarResource',array('tmplvarid'=>$tv->id, 'contentid'=>$page->get('id')));
        if($tvs) {
            $viewTv = $tvs->get('value');
            $tvs->set('value',intval($viewTv) + 1);
            if($tvs->save()) $view = $viewTv;
        } else {
            $tvn = $modx->newObject('modTemplateVarResource');
            $tvn->set('tmplvarid',$tv->id);
            $tvn->set('contentid',$page->get('id'));
            $tvn->set('value',1);
            if($tvn->save()) $view = 1;
        }       
    } 
} else {
    $view = $page->getProperty('hitts','hitspage',$view);
}
if($result->{"num_rows"} == 0){
    $page->setProperty('hitts',intval($view) + 1,'hitspage');
    $page->save();
}
return $view;