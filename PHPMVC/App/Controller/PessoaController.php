<?php 

class PessoaController{
    public static function index(){
        include 'Model/Pessoa.php';

        $model = new Pessoa();
        $model->getAllRows();
        
        include 'View/modules/Pessoa/ListaPessoa.php';
    }

    public static function form(){
        include 'View/modules/Pessoa/FormPessoa.php';
    }

    public static function save(){
        include 'Model/Pessoa.php';

        $model = new Pessoa();

        $model->nome = $_POST['nome'];
        $model->email = $_POST['email'];
        $model->senha = $_POST['senha'];

        $model->save();

        header("Location: /pessoa");
    }
}

?>