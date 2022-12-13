<?php
namespace OOP\App\Model;
use OOP\App\Config\Database;

class Collaboration extends Database{
    public function all(){ //all
        $statement =  self::$conn->prepare("select * from collaboration");
        $statement->execute();
 
        return $statement->fetchAll(\PDO::FETCH_OBJ);
     }

     public function insert($data){
        $statement = self::$conn->prepare("INSERT INTO collaboration(name,
        address, phone, email, created_at)
        VALUES (:name, :address, :phone, :email, :created_at)");

        return $statement->execute($data);

    }

    public function delete($id){
        $statement = self::$conn->prepare("DELETE FROM collaboration WHERE id='$id'");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function update($data, $id) {
        $statement = self::$conn->prepare("UPDATE collaboration SET name = :name, address = :address, phone = :phone, email = :email, updated_at = :updated_at 
        WHERE id='$id'");

        return $statement->execute($data);

    } 
}