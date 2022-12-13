<?php
namespace OOP\App\Model;
use OOP\App\Config\Database;

class Branch extends Database{
    public function all(){ //all
        $statement =  self::$conn->prepare("SELECT branch.id, branch.name, branch.category, branch.founded_year, branch.address, collaboration.name as collaboration , branch.available_seats
        FROM `branch`
        LEFT JOIN collaboration
        ON branch.collab_id = collaboration.id");
        $statement->execute();
 
        return $statement->fetchAll(\PDO::FETCH_OBJ);
     }

     public function insert($data){
        $statement = self::$conn->prepare("INSERT INTO branch(name, category, founded_year, address, collab_id, available_seats, created_at)
        VALUES (:name, :category, :founded_year, :address, :collab_id, :available_seats, :created_at)");

        return $statement->execute($data);

    }

    public function delete($id){
        $statement = self::$conn->prepare("DELETE FROM branch WHERE id='$id'");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function update($data, $id) {
        $statement = self::$conn->prepare("UPDATE branch SET name = :name,  category = :category, founded_year = :founded_year, address = :address, collab_id = :collab_id, available_seats = :available_seats, updated_at = :updated_at 
        WHERE id='$id'");

        return $statement->execute($data);

    } 
}