<?php 

namespace App;

use \App\Core\Model;

class Auth {
    public static function Login($email, $senha){
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = Model::getCOnn()->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->execute();

        if($stmt->rowCount() >= 1){
            $resultado = $stmt->fetch(\PDO::FETCH_ASSOC);
            if(password_verify($senha, $resultado['senha'])){
                $_SESSION['logado'] = true;
                $_SESSION['userId'] = $resultado['id'];
                $_SESSION['userNome'] = $resultado['nome'];
                header('Location: /home/register');
            } else{
                return "Senha Inválida";
            };
        } else{
            return "Email Inválido";
        };
    }

    public static function Logout(){
        session_destroy();
        header('Location: /home/index');
        unset($url[2]);
    }

    public static function checkLogin(){
        if(isset($_SESSION['logado'])){
            header('Location: /home/template');
            die;
        }
    }

    public static function Test(){
        header('Location: /home/register');
    }


}