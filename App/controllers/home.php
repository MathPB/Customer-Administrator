<?php
use App\Core\Controller;
use App\Auth;

class Home extends Controller {

    public function index(){
        $this->view('template');
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

        $this->view('home/template', $dados = ['mensagem'=> $mensagem]);
    }

    public function register(){
        $this->view('register');
    }
}