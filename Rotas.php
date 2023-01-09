<?php

class Rotas 
{
    public static function rotas($notaObjeto) 
    {
        return  [
            '/notas' => ['GET', $notaObjeto,'notas'],
            '/nota' => ['GET', $notaObjeto, 'nota'],
            '/nota/salvar' => ['POST', $notaObjeto, 'salvarNota'],
            '/nota/apagar' => ['DELETE', $notaObjeto, 'apagarNota'],
            '/nota/atualizar' => ['PUT', $notaObjeto, 'atualizarNota'] 
        ];

    }

}