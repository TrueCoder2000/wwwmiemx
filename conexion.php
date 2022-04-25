<?php

$host       = "localhost";
$user       = "Baptista";
$senha      = "Charmineetmoi@2008";
$database   = "mieproyecto";


$con        = mysqli_connect($host, $user, $senha, $database) or die("erro de conexao");

echo "Usted esta conectado";

?>