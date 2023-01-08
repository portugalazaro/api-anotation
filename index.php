<?php

require_once "./Connection.php";
require_once "./controller/Notas.php";
require_once "./Rotas.php";

$notaObejto = new Notas(Connection::connection());


$dados = Rotas::rotas($notaObejto, ['id' => 2]);

if(array_key_exists($_SERVER['PATH_INFO'], $dados)) {
    echo '<pre>';
    print_r($dados[$_SERVER['REQUEST_URI']][1]);
}