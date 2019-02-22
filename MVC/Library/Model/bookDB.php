<?php

namespace Model;

class BookDB {
    $connection;

    public function BookDB($connection) {
        $this->connection = $connection;
    }

    public function create($record) {
        $sql = "INSERT INTO `book` (`name`,`category_id`) VALUES (?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $record->name);
        $statement->bindParam(2, $record->category_id);

        return $statement;
    }

    public function getAll() {
        $sql = "SELECT * FROM `book`";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $categories = [];

        foreach ($result as $row) {
            $record = new Category($row['name']);
            $record->id = $row['id'];
            $records[] = $record;
        }

        return $records;
    }
}