
<?php

$diameter = 400;
$radius = $diameter/2;
$angle = 360/5;

$a = $radius * 5/10;
$b = $radius * 2/10;
$c = $radius * 10/10;
$d = $radius * 3/10;
$e = $radius * 7/10;

// create image
$image = imagecreatetruecolor($diameter, $diameter);

// allocate some colors
$white    = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);

$gray     = imagecolorallocate($image, 0xC0, 0xC0, 0xC0);
$darkgray = imagecolorallocate($image, 0x90, 0x90, 0x90);
$navy     = imagecolorallocate($image, 0x00, 0x00, 0x80);
$darknavy = imagecolorallocate($image, 0x00, 0x00, 0x50);


$darkred      = imagecolorallocate($image, 0x90, 0x00, 0x00);
$red      = imagecolorallocate($image, 0xFF, 0x00, 0x00);
$lightred      = imagecolorallocate($image, 0xFF, 0x90, 0x90);

$darkgreen      = imagecolorallocate($image, 0x00, 0x90, 0x00);
$green      = imagecolorallocate($image, 0x00, 0xFF, 0x00);
$lightgreen      = imagecolorallocate($image, 0x00, 0xFF, 0x00);

$darkblue      = imagecolorallocate($image, 0x00, 0x00, 0x90);
$blue      = imagecolorallocate($image, 0x00, 0x00, 0xFF);
$lightblue      = imagecolorallocate($image, 0x00, 0x00, 0xFF);

$darkyellow      = imagecolorallocate($image, 0x90, 0x90, 0x00);
$yellow      = imagecolorallocate($image, 0xFF, 0xFF, 0x00);
$lightyellow      = imagecolorallocate($image, 0xFF, 0xFF, 0x00);

$darkcyan      = imagecolorallocate($image, 0x00, 0x90, 0x90);
$cyan      = imagecolorallocate($image, 0x00, 0xFF, 0xFF);
$lightcyan      = imagecolorallocate($image, 0x00, 0xFF, 0xFF);

// make the 3D effect
//for ($i = 60; $i > 50; $i--) {
//   imagefilledarc($image, 50, $i, 100, 50, 0, 45, $darknavy, IMG_ARC_PIE);
//   imagefilledarc($image, 50, $i, 100, 50, 45, 75 , $darkgray, IMG_ARC_PIE);
//   imagefilledarc($image, 50, $i, 100, 50, 75, 360 , $darkred, IMG_ARC_PIE);
//}

// bool imagefilledarc ( resource $image , int $cx , int $cy , int $width , int $height , int $start , int $end , int $color , int $style )



imagefilledarc($image, $radius, $radius, $a, $a, 0, $angle, $lightred, IMG_ARC_PIE);
imagefilledarc($image, $radius, $radius, $a * 2/3, $a * 2/3, 0, $angle, $red, IMG_ARC_PIE);
imagefilledarc($image, $radius, $radius, $a/3, $a/3, 0, $angle, $darkred, IMG_ARC_PIE);

imagefilledarc($image, $radius, $radius, $b, $b, $angle, $angle * 2, $green, IMG_ARC_PIE);
imagefilledarc($image, $radius, $radius, $c, $c, $angle * 2, $angle * 3, $blue, IMG_ARC_PIE);
imagefilledarc($image, $radius, $radius, $c/2, $c/2, $angle * 2, $angle * 3, $gray, IMG_ARC_PIE);
imagefilledarc($image, $radius, $radius, $d, $d, $angle * 3, $angle * 4, $yellow, IMG_ARC_PIE);
imagefilledarc($image, $radius, $radius, $e, $e, $angle * 4, $angle * 5, $gray, IMG_ARC_PIE);

ob_clean(); 
// flush image
 header('Content-type: image/png');
imagepng($image);
imagepng($image, '/home/danny/wordpress/WordPress/charts/images/test_pie.png');


imagedestroy($image);
?>

