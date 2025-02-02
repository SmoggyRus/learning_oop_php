<?php
class QueryBuilder {
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }
    public function getAll($table)
    {
        $sql = "SELECT * FROM {$table}";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function create($table, $data){

        $keys = implode(", ", array_keys($data));
        $tags = ":" . implode(", :", array_keys($data));

        $sql = "INSERT INTO {$table} ($keys) VALUES ({$tags})";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);
    }
    public function getOne($table, $id){
        $sql = "SELECT * FROM {$table} WHERE id = :id";

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(
            [
                ":id" => $id
            ]
        );
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function update($table, $data){
//        $sql = "UPDATE {$table} SET title = :title WHERE id = :id";

    }
}