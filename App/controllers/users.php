<?php
use App\Core\Controller;
use App\Auth;

class Users extends Controller {

    public function index(){
        $this->view('users/login');
    }


    public function login(){
        $mensagem = array();

        if(isset($_POST['entrar'])){
            if((empty($_POST['email'])) || (empty($_POST['senha']))){
                $mensagem[] = "Campo e-mail e senha obrigatórios!";

                $this->view('local', $dados = ['mensagem'=> $mensagem]);
            } else{
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $mensagem[] = Auth::Login($email, $senha);
            }

            $cliente = $this->model('Customer');
            $dados = $cliente->getAll();
            $this->view('local', $dados = ['registros'=> $dados]);
        };

        
    }

    public function insertUser(){
        Auth::checkLogin();

        $mensagem = array();

        if(isset($_POST['cadastrar'])){
            $nome = $_POST['nome'];
            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
            $email = $_POST['email'];

            $user = $this->model('User');
            $user->nome = $nome;
            $user->email = $email;
            $user->senha = $senha;

            $mensagem[] = $user->save();

            $cliente = $this->model('Customer');
            $dados = $cliente->getAll();
    

            $this->view('local', $dados = ['mensagem'=> $mensagem, 'registros'=> $dados]);
        };

        $this->view('users/register', $dados = ['mensagem'=> $mensagem]);

    }

    public function backHome(){
        $cliente = $this->model('Customer');
        $dados = $cliente->getAll();

        $this->view('local', $dados = ['registros'=> $dados]);
    }


    public function registerUser(){
        $this->view('cadastrar');
    }

    public function sair(){
        Auth::Logout();
    }

    
    public function pathRegister(){
        $this->view('cliente/criar');
    }
}