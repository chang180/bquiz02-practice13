<?php
include_once "../base.php";
$post=$News->find($_POST['id']);
echo "<div>".nl2br($post['text'])."</div>";