<?php



$ch = curl_init('<img src="php/qr_img.php?d=ss"');
$fp = fopen('images/qr1.jpg', 'wb');
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
fclose($fp);

?>