<?php

class DBContext
{
    private PDO $pdo;

    public function __construct(Config $config){
        try{
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false
            ];

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

    public function getAllFavPeople(): false|array
    {
        $stmt = $this->pdo
                        ->prepare("SELECT FirstName, LastName, Age, JobTitle FROM Favorite_People");
        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function getFavPersonById(int $id){
        $stmt = $this->pdo
                        ->prepare("SELECT FirstName, LastName, Age, JobTitle FROM Favorite_People WHERE ID = ?");
        $stmt->execute([$id]);

        return $stmt->fetch();
    }
}