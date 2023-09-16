<?php
class Banco

{
    public $conexao;
  
    //construtor
    function __construct()
    {
        //definições de host, database, usuário e senha
        $host = "localhost";
        $base = "TOCC8";
        $porta = "5432";
        $usuario = "postgres";
        $senha = $this->lerSenha();
        //conecta ao banco de dados
        $this->conexao = pg_connect("host=$host port=$porta dbname=$base user=$usuario password=$senha");
        
        if (!$this->conexao) {
            echo "Erro ao conectar ao banco de dados." . pg_last_error();
            exit;
        }
    }
    function lerSenha(){
        $arquivo = fopen("../senha.senha", 'r');
        $senha = fgets($arquivo);
        fclose($arquivo);
        return $senha;
    }
    
    
}