<?php

class DBContext
{
    private PDO $pdo;
    private PDOStatement $statement;
    private const VALID_TABLES = ['Favorite_People'];

    public function __construct(){
        try{
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ];

            $config = new Config();

            $this->pdo = new PDO(
                $config->getDSN(),
                $config->getDBConUsername(),
                $config->getDBConPassword(),
                $options
            );
        } catch(PDOException $e){
            echo "Error on DB connection: " . $e->getMessage();
        }
    }


    public function fetchSingleOrMany($queryStmt, $params = [], bool $fetchMany = false) : array
    {
        $this->execStmt($queryStmt, $params);

        $result = $fetchMany ? $this->statement->fetchAll() : $this->statement->fetch();

        if (!$result) {
            abort();
        }

        return $result;
    }

    public function getTableCount($tableName)
    {
        if(!in_array($tableName, self::VALID_TABLES)) {
            abort();
        }

        $this->execStmt("SELECT COUNT(*) FROM " . $tableName);
        return $this->statement->fetchColumn();
    }

    public function execStmt($stmt, $params = []) : void
    {
        $this->statement = $this->pdo->prepare($stmt);
        $this->statement->execute($params);
    }
}
