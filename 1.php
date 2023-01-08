<?php
 
// require_once "./src/config/dbConfig.php";
// require_once "./src/config/controladorRotas.php";
// require_once "./src/models/Users.php";

echo '<pre>';
print_r($_SERVER);

// $_SERVER[REQUEST_METHOD] -> PEGA O METODO DA REQUISICAO. EX : GET,POST...
// $_SERVER[REQUEST_URI] -> PEGA PARTE DA URL
// $_SERVER[PATH_INFO] -> O MESMO QUE REQUEST_URI

exit;

if(array_key_exists($_SERVER['REQUEST_URI'], ControladorRotas::rota())){

    echo $rotas[$_SERVER['REQUEST_URI']];

}else {
    echo 'rota nao encontrada';
}

