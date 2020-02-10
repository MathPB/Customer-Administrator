<?php

use App\Core\Model;

// Model Singleton

class Cliente extends Model{
    public $nome;
    public $data;
    public $cpf;
    public $rg;
    public $telefone;


    public function save(){
        $sql = "INSERT INTO custumers (nome, nasc, cpf, rg, telefone) VALUES (?, ?, ?, ?, ?)";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $this->nome);
        $stmt->bindValue(2, $this->data);
        $stmt->bindValue(3, $this->cpf);
        $stmt->bindValue(4, $this->rg);
        $stmt->bindValue(5, $this->telefone);
        if($stmt->execute()){
            return "Cadastrado com sucesso!";
            header('Location: /home/register');
        } else {
            return "Erro ao cadastrar!";
        };
    }
}