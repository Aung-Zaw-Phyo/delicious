<?php

namespace core\database;

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
}