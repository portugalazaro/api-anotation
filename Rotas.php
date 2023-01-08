<?php

class Rotas 
{
    public static function rotas($notaObjeto, $dados = []) 
    {
        return  [
            '/notas' => ['GET', $notaObjeto->notas()],
            '/nota' => ['GET', $notaObjeto->nota($dados['id'])],
            '/nota/salvar' => 'nota salva',
            '/nota/apagar' => 'apagando nota',
            '/nota/atualizar' => 'atualizando nota' 
        ];

    }

    // public static function controladorRotas($rota)
    // {

    //     $metodos = [
    //         'GET' => 
    //     ]

    // }
}