<?php

$filename = $_GET['filename']; // TODO: validate
$filepath = '../data/' . $filename;

$image = imagecreatefrompng($filepath);
header('Content-Type: image/png');
imagepng($image);
exit;
