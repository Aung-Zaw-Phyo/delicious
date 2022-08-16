<?php

namespace core\database;

use Exception;
use PDO;

class QueryBuilder {
    protected $pdo;

    public function __construct ($db) {
        $this->pdo = $db;
    }

    public function fetchAll ($table) {
        $sql = "SELECT * FROM $table";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function fetchAllLimit ($table, $start, $end=null) {
        $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT $start";
        if($end){
            $sql = "SELECT * FROM $table ORDER BY id DESC LIMIT $start, $end";
        }
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function join ($table, $secTable, $col, $secCol) {
        $sql = " SELECT $table.*, $secTable.name AS category FROM $table LEFT JOIN $secTable ON $table.$col = $secTable.$secCol ";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function count ($table, $col=null, $data=null) {
        $sql = "SELECT * FROM $table";
        if ($col && $data){
            $sql = "SELECT * FROM $table WHERE $col='$data'";
        }
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->rowCount();
    }

    public function fetch ($table, $col, $data, $start=null, $count=null) {
        $sql = "SELECT * FROM $table WHERE $col='$data' ORDER BY id DESC";
        if ($start OR $count){
            $sql = "SELECT * FROM $table WHERE $col='$data' ORDER BY id DESC LIMIT $start, $count";
        }
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert ($table, $dataArr) {
        $keys = array_keys($dataArr);
        $cols = implode(',', $keys);
        $questionMarks = '';
        foreach ($dataArr as $data) {
            $questionMarks .= '?,';
        }
        $questionMarks = rtrim($questionMarks, ',');
        $sql = "INSERT INTO $table ($cols) VALUES ($questionMarks)";
        $statement = $this->pdo->prepare($sql);
        $values = array_values($dataArr);
        $statement->execute($values);
    }

    public function update ($table, $dataArr, $id) {
        // update users set name=? where id=3
        $keys = array_keys($dataArr);
        $cols = '';
        foreach ($keys as $key) {
            $cols .= $key . "=?,";
        }
        $cols = rtrim($cols, ',');
        $sql = "UPDATE $table SET $cols WHERE id=$id";
        $statement = $this->pdo->prepare($sql);
        $values = array_values($dataArr);
        $statement->execute($values);
    }

    public function delete ($table, $id) {
        $sql = "DELETE FROM $table WHERE id=$id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
    }

    public function isExist ($table, $col, $data) {
        //select * from categories where name=?
        
        $sql = "SELECT * FROM $table WHERE $col=?";
        // dd($sql);
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$data]);
        return $statement->rowCount();
    }
}