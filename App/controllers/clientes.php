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

        header('Location: /home/register');
    }

    public function excluir($id = ''){
        
        Auth::checkLogin();

        $mensagem = array();

        $cliente = $this->model('Cliente');
        $mensagem[] = $cliente->delete($id);

        $dados = $cliente->getAll();

        header('Location: /home/register');
    }

    public function editar($id = ''){
        
        // Auth::checkLogin();

        $mensagem = array();

        $cliente = $this->model('Cliente');

        if(isset($_POST['atualizar'])){
            $cliente->nome = $_POST['nome'];
            $cliente->data = $_POST['data'];
            $cliente->cpf = $_POST['cpf'];
            $cliente->rg = $_POST['rg'];
            $cliente->telefone = $_POST['telefone'];  
            $mensagem[] = $cliente->uptdate($id);
        };

        $dados = $cliente->findId($id);
        $this->view('cliente/editar', $dados = ['mensagem'=> $mensagem, 'registros'=> $dados]);

    }
}