<?php
include_once "../base.php";
$Que->save(['text'=>$_POST['que']]);
$parent=$Que->find(['text'=>$_POST['que']])['id'];
foreach($_POST['opt'] as $o){
   $Que->save(['text'=>$o,'parent'=>$parent]);
}
to("../admin.php?do=que");