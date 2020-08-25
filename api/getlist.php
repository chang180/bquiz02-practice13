<?php
include_once "../base.php";
$news=$News->all(['type'=>$_POST['type']]);
foreach($news as $n){
    echo "<a href='#' onclick='getpost(".$n['id'].")'>".$n['title']."</a><br>";
}