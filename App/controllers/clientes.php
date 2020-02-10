<?php
use App\Core\Controller;

class Clientes extends Controller {

    public function inserir(){
     
        $mensagem = array();

        if(isset($_POST['cadastrar'])){
            if(empty($_POST['nome'] && $_POST['data'] && $_POST['cpf'] && $_POST['rg'] && $_POST['telefone'])){
                $mensagem[] = "Todos os campos devem ser preenchidos!!!";
            } else {
                $cliente = $this->model('Cliente');
                $cliente->nome = $_POST['nome'];
                $cliente->data = $_POST['data'];
                $cliente->cpf = $_POST['cpf'];
                $cliente->rg = $_POST['rg'];
                $cliente->telefone = $_POST['telefone'];             
                $mensagem[] = $cliente->save();
            };
        };

        $this->view('local', $dados = ['mensagem'=> $mensagem]);
    }
}