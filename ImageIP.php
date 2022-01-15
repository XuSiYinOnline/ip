<?php

require_once('IPQuery.class.php');
$ip = new IPQuery();
$addr = $ip->query($_SERVER['REMOTE_ADDR']);

header("Content-type: image/JPEG");
$im = imagecreatefromjpeg("image.jpg"); 
$ua = $_SERVER['HTTP_USER_AGENT'];
$get = $_GET["s"];
$get = base64_decode(str_replace(" ","+",$get));
$weekarray = array("日","一","二","三","四","五","六"); 

$black = ImageColorAllocate($im, 0,0,0);//定义黑色的值
$red = ImageColorAllocate($im, 255,0,0);//红色
$font = 'font.ttf';//加载字体

//输出
imagettftext($im, 13, 0, 0, 30, $red, $font,' '.date('Y年n月j日').' 星期'.$weekarray[date("w")] .' '.$addr['pos'].' '.$addr['isp'].'');


imagettftext($im, 11, 0, 10, 250, $black, $font,$get); 
ImageGif($im);
ImageDestroy($im);


function curl_get($url, array $params = array(), $timeout = 6){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $file_contents = curl_exec($ch);
    curl_close($ch);
    return $file_contents;
}
?>


