<?php


$im = imagegrabscreen();
imagepng($im, "mi_captura_de_pantalla.png");
imagedestroy($im);
?>
/*if(isset($_POST['comprar'])){
function takeScrenShot($name){
	

$im = imagegrabscreen();

imagepng($im, $name. '.png');
imagejpg($im, $name. '.jpg');
imagejpeg($im, $name.'.jpeg');

imagedestroy($im);

}
}
