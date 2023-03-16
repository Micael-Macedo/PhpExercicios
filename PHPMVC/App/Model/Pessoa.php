<?php 

class Pessoa
{
    public $nome, $email, $senha;
    public $rows;

    public function save()
    {
        include 'DAO/PessoaDAO.php';
        $dao = new PessoaDAO();
        $dao->insert($this);

    }
    public function getAllRows()
    {
        include 'DAO/PessoaDAO.php';
        $dao = new PessoaDAO();

        $this->rows = $dao->select($this);

    }
}

?>