<?php



// Chargement de l'image dans une variable

$img = ImageCreateFromJPEG('image.jpg');



// Couleur du texte au format RGB

$textcolor = imagecolorallocate($img, 127, 127, 127);



// Le texte en question

imagestring($img, 10, 20, 40, 'PhotoForYou PhotoForYou PhotoForYou ', $textcolor);
imagestring($img, 10, 20, 100, 'PhotoForYou PhotoForYou PhotoForYou ', $textcolor);
imagestring($img, 10, 20, 160, 'PhotoForYou PhotoForYou PhotoForYou ', $textcolor);
imagestring($img, 10, 20, 220, 'PhotoForYou PhotoForYou PhotoForYou ', $textcolor);
imagestring($img, 10, 20, 280, 'PhotoForYou PhotoForYou PhotoForYou ', $textcolor);
imagestring($img, 10, 20, 340, 'PhotoForYou PhotoForYou PhotoForYou ', $textcolor);
imagestring($img, 10, 20, 400, 'PhotoForYou PhotoForYou PhotoForYou ', $textcolor);



// Un header spécifique
header('Content-type: image/jpeg');



// Maintenant, envoyer les données de l'image

imagejpeg ($img);



// Libérons la mémoire

imagedestroy($img);



?>