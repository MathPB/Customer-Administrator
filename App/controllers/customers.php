<?php
use App\Core\Controller;
use App\Auth;
class Customers extends Controller {

    public function insertCustomer(){

        Auth::checkLogin();
     
        $mensagem = array();

        if(isset($_POST['cadastrar'])){
            if(empty($_POST['nome'] && $_POST['data'] && $_POST['cpf'] && $_POST['rg'] && $_POST['telefone'])){
                $mensagem[] = "Todos os campos devem ser preenchidos!!!";
            } else {
                $cliente = $this->model('Customer');
                $cliente->nome = $_POST['nome'];
                $cliente->data = $_POST['data'];
                $cliente->cpf = $_POST['cpf'];
                $cliente->rg = $_POST['rg'];
                $cliente->telefone = $_POST['telefone'];             
                $mensagem[] = $cliente->save();
            };

        } else{
            $this->view('customers/insert');
        };

        $cliente = $this->model('Customer');
        $dados = $cliente->getAll();

        $this->view('local', $dados = ['mensagem'=> $mensagem, 'registros'=> $dados]);
    }

    public function deleteCustomer($id = ''){
        
        Auth::checkLogin();

        $mensagem = array();

        $cliente = $this->model('Customer');
        $mensagem[] = $cliente->delete($id);

        $dados = $cliente->getAll();

        $this->view('local', $dados = ['mensagem'=> $mensagem, 'registros'=> $dados]);
    }

    public function updateCustomer($id){
        
        Auth::checkLogin();

        $mensagem = array();

        $cliente = $this->model('Customer');

        if(isset($_POST['atualizar'])){
            $cliente->nome = $_POST['nome'];
            $cliente->data = $_POST['data'];
            $cliente->cpf = $_POST['cpf'];
            $cliente->rg = $_POST['rg'];
            $cliente->telefone = $_POST['telefone'];  
            $mensagem[] = $cliente->update($id);

        } else{
            $dados = $cliente->findId($id);
            $this->view('customers/update', $dados = ['mensagem'=> $mensagem, 'registros'=> $dados]);
        };

        $cliente = $this->model('Customer');
        $dados = $cliente->getAll();

        $this->view('local', $dados = ['mensagem'=> $mensagem, 'registros'=> $dados]);

    }
}