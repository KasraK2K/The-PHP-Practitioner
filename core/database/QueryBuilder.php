<?php

class QueryBuilder

{
    protected $pdo;

     // inject $pdo to use in this class - i used PDO to inject just $pdo object
    public function __construct(PDO $pdo)

    {
        $this->pdo = $pdo;
    }

    public function fetchAll($table)

    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}