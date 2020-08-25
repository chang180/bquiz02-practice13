<?php
include_once "../base.php";
$news=$News->find($_POST['id']);
switch($_POST['type']){
    case 1:
$news['good']++;
$News->save($news);
$Log->save(['news'=>$_POST['id'],'user'=>$_POST['user']]);
    break;
    case 2:
$news['good']--;
$News->save($news);
$Log->del(['news'=>$_POST['id'],'user'=>$_POST['user']]);
    break;
}