<?php
$server = "localhost";
$user = "root";
$password = "";
$dbname = "empresa";

if ($conn = mysqli_connect($server, $user, $password, $dbname)) {
} else
    echo "error";

function mensagem($texto, $tipo)
{
    echo "<div class='alert alert-$tipo' role='alert'>
                $texto
                </div>";
}

function mostra_data($data){
    $d = explode('-', $data);
    $escreve = $d[2]."/".$d[1]."/".$d[0];
    return $escreve;
}