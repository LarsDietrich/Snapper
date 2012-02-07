<?php

$img = $_POST['img'];

$img = base64_decode($img);

$res = file_put_contents('image', $img);

header('Content-Type: text/plain; charset=UTF-8');
passthru('tesseract image result -l eng;')

?>
