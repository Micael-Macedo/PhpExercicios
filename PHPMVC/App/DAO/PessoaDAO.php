<?php 
class PessoaDAO{
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost:3306;dbname=db_mvc";

        $this->conexao = new PDO($dsn, 'root', '1234');
    }
    public function insert(Pessoa $model){
        $sql = "insert into pessoa (nome, email, senha) values (?,?,?)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->email);
        $stmt->bindValue(3, $model->senha);

        $stmt->execute();
    }
    public function update(){

    }
    public function delete(){

    }
    public function select(){
        $sql = "select * from pessoa";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);
    }
}


?>