<?php

use App\Core\Model;

// Model Singleton

class Customer extends Model{
    public $nome;
    public $data;
    public $cpf;
    public $rg;
    public $telefone;


    public function getAll(){
        $sql = "SELECT * FROM customer";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        }else {
            return [];
        };
    }

    public function update($id){
        $sql = "UPDATE customer SET nome = ?, nasc = ?, cpf = ?, rg = ?, telefone = ? WHERE id = ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $this->nome);
        $stmt->bindValue(2, $this->data);
        $stmt->bindValue(3, $this->cpf);
        $stmt->bindValue(4, $this->rg);
        $stmt->bindValue(5, $this->telefone);
        $stmt->bindValue(6, $id);

        if($stmt->execute()){
            return "Atualizado com sucesso!";
            
        } else {
            return "Erro ao atualizar!";
        };
    }

    public function save(){
        $sql = "INSERT INTO customer (nome, nasc, cpf, rg, telefone) VALUES (?, ?, ?, ?, ?)";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $this->nome);
        $stmt->bindValue(2, $this->data);
        $stmt->bindValue(3, $this->cpf);
        $stmt->bindValue(4, $this->rg);
        $stmt->bindValue(5, $this->telefone);
        if($stmt->execute()){
            return "Cadastrado com sucesso!";
        } else {
            return "Erro ao cadastrar!";
        };
    }

    public function delete($id){
        $sql = "DELETE FROM customer WHERE id = ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        if($stmt->execute()){
            return "Excluído com sucesso!";
        } else {
            return "Erro ao excluir!";
        };
    }

    public function findId($id){
        $sql = "SELECT * FROM customer WHERE id = ?";
        $stmt = Model::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
            return $resultado;
        } else{
            return[];
        };
    }
}