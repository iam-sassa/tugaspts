<?php
namespace OOP\App\Model;
use OOP\App\Config\Database;

class Client extends Database{
    public function all(){ //all
        $statement =  self::$conn->prepare("select * from client");
        $statement->execute();
 
        return $statement->fetchAll(\PDO::FETCH_OBJ);
     }

     public function insert($data){
        $statement = self::$conn->prepare("INSERT INTO client(name,
        phone, email, address, created_at)
        VALUES (:name,  :phone, :email, :address, :created_at)");

        return $statement->execute($data);

    }

    public function delete($id){
        $statement = self::$conn->prepare("DELETE FROM client WHERE id='$id'");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function update($data, $id) {
        $statement = self::$conn->prepare("UPDATE client SET name = :name,  phone = :phone, email = :email, address = :address, updated_at = :updated_at 
        WHERE id='$id'");

        return $statement->execute($data);

    } 
}