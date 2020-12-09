<?php
header("Content-Type: image/jpg");
header("Cache-Control: max-age=86400");
header("Pragma: cache");
header("Expires: ". date(DATE_RFC2822, time() + 86400));
$fileLocation = "./img.jpg";
$fileHeader = fopen($fileLocation, 'r', false);
$response = "";

if ($fileHeader) {
    $response = stream_get_contents($fileHeader);
    fclose($fileHeader);
}

exit($response);
?>