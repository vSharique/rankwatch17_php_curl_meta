<?php
$webaddress = $_POST["website"];
$wrapper = fopen('php://temp', 'r+');
$ch = curl_init($webaddress);
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_STDERR, $wrapper);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);
$ips = get_curl_remote_ips($wrapper);
fclose($wrapper);

echo end($ips);  // 208.69.36.231

function get_curl_remote_ips($fp) 
{
    rewind($fp);
    $str = fread($fp, 8192);
    $regex = '/\b\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\b/';
    if (preg_match_all($regex, $str, $matches)) {
        return array_unique($matches[0]);  // Array([0] => 74.125.45.100 [2] => 208.69.36.231)
    } else {
        return false;
    }
}
?>
