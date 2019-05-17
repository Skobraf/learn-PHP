<?php
function connectMaBasi(){
$basi = mysqli_connect ('localhost', 'root', '','mabase');
return $basi;
}
?>