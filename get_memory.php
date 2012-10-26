<?php
$png_image = './images/banner.png';
$font_path = './fonts/bellerose-webfont.ttf';

$total_memory = file_get_contents("./memory.cache");

$im = imagecreatefrompng($png_image);
$textcolor = imagecolorallocate($im, 255, 255, 255);

imagettftext($im, 18, 0, 110, 27, $textcolor, $font_path, "Total Amount Of Ram Online");
imagettftext($im, 18, 0, 200, 52, $textcolor, $font_path, $total_memory . " MB");

header("Content-type: image/png");

imagepng($im);
imagedestroy($im);
?>