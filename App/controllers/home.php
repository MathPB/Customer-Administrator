<?php
use App\Core\Controller;
use App\Auth;

class Home extends Controller {

    public function index(){
        $this->view('login');
    }

    public function login(){
        $mensagem = array();

        if(isset($_POST['entrar'])){
            if((empty($_POST['email'])) || (empty($_POST['senha']))){
                $mensagem[] = "Campo e-mail e senha obrigatórios!";
            } else{
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $mensagem[] = Auth::Login($email, $senha);
            }
        };

        $this->view('home/local', $dados = ['mensagem'=> $mensagem]);
    }

    public function insertReg(){
        // Auth::checkLogin();

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
        };

        $this->view('register', $dados = ['mensagem'=> $mensagem]);

    }

    public function register(){
        $this->view('local');
    }

    public function cadastrar(){
        $this->view('cadastrar');
    }

    public function sair(){
        $this->view('login');
    }

    
    public function cliCadastro(){
        $this->view('cliente/criar');
    }
}