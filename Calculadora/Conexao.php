<?php
//PHP Data Objects
class Conexao{
    private $conexao;
    private $host;
    private $port;
    private $user;
    private $pass;
    private $db;

    public function __construct(){
        $this->host = "127.0.0.1";
        $this->port = "3306";
        $this->user = "root";
        $this->pass = "1234";
        $this->db = "calculadora";
    }

    protected function conectar(){
        try{
            $this->conexao = 
            new PDO("mysql:host=".$this->host.";port=".$this->port.";dbname=".$this->db, $this->user, $this->pass);
        }catch (PDOException $i){
            //se houver exceção, exibe
            echo "Erro: <code>" . $i->getMessage(). "</code>";
            return NULL;
        }
        return $this->conexao;
    }

    protected function inserir($sql, $param=null){
        $conexao = $this->conectar();
        $query = $conexao->prepare($sql);
        $query->execute($param);
        $result = $conexao->lastInsertId();
        return $result;
    }

    protected function apagar($sql, $param=null){
        $conexao = $this->conectar();
        $query = $conexao->prepare($sql);
        $query->execute($param);
        $result = $query->rowCount();
        return $result;
    }

    protected function atualizar($sql,$param=null){
        $conexao = $this->conectar();
        $query = $conexao->prepare($sql);
        $query->execute($param);
        $result = $query->lastInsertId();
        return $result;
    }
    protected function listar($sql,$param=null){
        $conexao = $this->conectar();
        $query = $conexao->prepare($sql);
        $query->execute($param);
        $result = $query->rowCount();
        return $result;
    }

}

?>