<?php
include_once 'functions/general.php';
$content="I'm sorry I messed up.";
sendmail('wangjqinxr@163.com', 'Activate you account', $content);

header("Location:content.php");