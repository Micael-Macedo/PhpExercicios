<?php 
$host = 'localhost';
$username = 'root';
$password = '1234';
$database = 'escola';

$mysqli = new mysqli($host, $username, $password, $database);
if($mysqli->connect_errno){
    echo "Falha ao acessar o banco: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error; 
}else{
    echo "Conexão realizada com sucesso";
    //READ
    $sql = "select * from tb_turma";
    $result = $mysqli->query($sql);
    if($result->num_rows){
        while ($turma = $result->fetch_object()) {
            echo "Turma ID: ". $turma->turma_id ."Ano Escolar: ". $turma->ano_escolar . "Turma: " .$turma->turma .'<br>';
        }
    }

    //CREATE
    $sql = "insert into tb_turma(ano_escolar, turma) values (8, 'C')";
    $mysqli->query($sql);

    //update
    $sql = "update tb_turma set ano_escolar = 8 where turma_id = 3";
    $mysqli->query($sql);

    $sql = "select * from tb_turma";
    $result = $mysqli->query($sql);
    if($result->num_rows){
        while ($turma = $result->fetch_object()) {
            echo "Turma ID: ". $turma->turma_id ."Ano Escolar: ". $turma->ano_escolar . "Turma: " .$turma->turma .'<br>';
        }
    }
    //DELETE
    $sql="delete from tb_turma where turma_id = 1";
    $mysqli->query($sql);

    $sql = "select * from tb_turma";
    $result = $mysqli->query($sql);
    if($result->num_rows){
        while ($turma = $result->fetch_object()) {
            echo "Turma ID: ". $turma->turma_id ."Ano Escolar: ". $turma->ano_escolar . "Turma: " .$turma->turma .'<br>';
        }
    }

}

?>