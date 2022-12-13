<?php
namespace OOP\App\Model;
use OOP\App\Config\Database;

class Programs extends Database{
    public function all(){ //all
        $statement =  self::$conn->prepare("SELECT programs.id, programs.name, branch.name as branch_name, issue_date, due_date, branch.available_seats, price 
        FROM `programs` 
        LEFT JOIN branch
        ON programs.branch_id = branch.id");
        $statement->execute();
 
        return $statement->fetchAll(\PDO::FETCH_OBJ);
     }

     public function insert($data){
        $statement = self::$conn->prepare("INSERT INTO programs(name, branch_id, issue_date, due_date, price, created_at)
        VALUES (:name, :branch_id, :issue_date, :due_date, :price, :created_at)");

        return $statement->execute($data);

    }

    public function delete($id){
        $statement = self::$conn->prepare("DELETE FROM programs WHERE id='$id'");
        $statement->execute();

        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function update($data, $id) {
        $statement = self::$conn->prepare("UPDATE programs SET name = :name, branch_id = :branch_id, issue_date = :issue_date, due_date = :due_date, price = :price, updated_at = :updated_at 
        WHERE id='$id'");

        return $statement->execute($data);

    } 
}