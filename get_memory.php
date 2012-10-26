<?php
$png_image = './images/banner.png';
$font_path = './fonts/bellerose-webfont.ttf';

$total_memory = file_get_contents("./memory.cache");

$im = imagecreatefrompng($png_image);
$textcolor = imagecolorallocate($im, 255, 255, 255);

imagestring($im, 5, 130, 12, "Total Amount Of Ram Online", $textcolor);
imagestring($im, 5, 200, 32, $total_memory . " MB", $textcolor);

header("Content-type: image/png");
imagepng($im);
?>