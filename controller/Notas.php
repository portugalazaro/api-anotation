<?php

class Notas 
{
    private $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function notas():array
    {
        $stmt = $this->pdo->prepare("SELECT * FROM anotacoes");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function nota($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM anotacoes WHERE id_anotacao = :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }


    public function apagarNota($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM anotacoes WHERE id_anotacao = :id");
        $stmt->execute();
    }


}