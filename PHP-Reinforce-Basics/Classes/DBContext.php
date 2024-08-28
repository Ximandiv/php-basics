<?php

class DBContext
{
    private PDO $pdo;

    public function __construct(Config $config){
        try{
            $this->pdo = new PDO(
                $config->getDSN(),
                $config->getDBConUsername(),
                $config->getDBConPassword()
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo "Error on DB connection: " . $e->getMessage();
        }
    }

    public function execQueryArray($query){
        $stmt = $this->pdo->query($query);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function execQuerySingle($query){
        $stmt = $this->pdo->query($query);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}