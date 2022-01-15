<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="Pragma" content="no-cache"> 
<meta http-equiv="Cache-Control" content="no-cache"> 
<meta http-equiv="Expires" content="0"> 
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Xu Si Yin">
<title>Xu Si Yin</title>

</head>
<?php
require_once('IPQuery.class.php');

$ip = new IPQuery();
$addr = $ip->query($_SERVER['REMOTE_ADDR']);

echo "
IP:{$_SERVER['REMOTE_ADDR']} ADD:{$addr['pos']} ISP:{$addr['isp']} 
";
