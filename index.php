<?php

require_once "./Connection.php";
require_once "./controller/Notas.php";
require_once "./Rotas.php";

$notaObejto = new Notas(Connection::connection());


$dados = Rotas::rotas($notaObejto);

$caminhoRequisicao = $_SERVER['PATH_INFO'];
$rotaExiste = array_key_exists($caminhoRequisicao, $dados); 

if($rotaExiste & $_SERVER['REQUEST_METHOD'] == $dados[$caminhoRequisicao][0] ) {

    $notaObj = $dados[$caminhoRequisicao][1];
    $nomeMetodoCorrespondenteRota = $dados[$caminhoRequisicao][2]; 

    print_r($notaObejto->$nomeMetodoCorrespondenteRota(1));

}else {
    echo "o metodo precisa ser: " . $dados[$caminhoRequisicao][0]; 
}