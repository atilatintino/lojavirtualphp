<?php 

session_start();
//Deslogando usuário
session_destroy();
//Voltando pra home
header('Location: index.php');

?>