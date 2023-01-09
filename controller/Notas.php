<?php

class Notas 
{
    private $pdo;
    private $dados = [];
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function notas()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM anotacoes");
        $stmt->execute();
        return json_encode($stmt->fetchAll());
    }
    
    public function nota($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM anotacoes WHERE id_anotacao = :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return json_encode($stmt->fetchAll());
    }


    public function apagarNota($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM anotacoes WHERE id_anotacao = :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();
    }


    public function salvarNota(array $nota)
    {
        if(count($nota) < 1) {
            return 'Voce precisa enviar dados Enviar dados ';
        }
        $sql = "INSERT INTO anotacoes (titulo_anotacao, corpo_anotacao)VALUES(:titulo, :corpo)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':titulo', $nota[0]);
        $stmt->bindValue(':corpo', $nota[1]);
        
        if($stmt->execute()) {
            return $nota;
        }
    }

    public function atualizarNota(array $nota)
    {
        if(count($nota) > 1) {
            return false;
        }
        $sql = "UPDATE  anotacoes  SET titulo_anotacao = :titulo SET corpo_anotacao = :corpo WHERE id_anotacao = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue('titulo:', $nota[0]);
        $stmt->bindValue('corpo:', $nota[1]);
        $stmt->execute();

    }


}