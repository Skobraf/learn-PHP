<?php
function connectMyDb(){
$db = mysqli_connect ('localhost', 'root', '','mabase');
return $db;
}
?>