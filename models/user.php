<?php
 
require_once 'models/database.php';
 
class user
{
    public static function FindByEmail($email){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->execute(['email' => $email]);
        return $stmt->Fetch(PDO::FETCH_ASSOC);
    }
 
    public static function Find($id){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->Fetch(PDO::FETCH_ASSOC);
    }
 
    static public function create($data){
        $conn = Database::getConnection();
        $stmt = $conn->prepare("INSERT INTO usuarios(nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)");
        $stmt->execute($data);
   
    }

    //Função para buscar todos os usuários da base de dados
    public static function all(){
        $conn = Database::getConnection();
        $stmt = $conn->query("SELECT * FROM usuarios");
        //Retorna todos os usuarios com um array associativo
        return $stmt->FetchAll(PDO::FETCH_ASSOC);
    }

}