<?php

class Config
{
    private string $dbHost;
    private string $dbPort;
    private string $dbName;
    private string $dbUsername;
    private string $dbPass;
    private const string CHARSET = 'utf8mb4';

    public function __construct($env = 'dev'){
        if($env == 'dev') {
            $this->dbHost = '127.0.0.1';
            $this->dbPort = '3306';
            $this->dbName = 'TestDatabase';
            $this->dbUsername = 'root';
            $this->dbPass = '';
        } else if ($env == 'prod') {
            $this->dbHost = 'localhost';
            $this->dbPort = '3306';
            $this->dbName = 'TestDatabase';
            $this->dbUsername = 'root';
            $this->dbPass = '';
        }
    }

    public function getDBConHost(): string
    {
        return $this->dbHost;
    }

    public function getDBConPort(): string
    {
        return $this->dbPort;
    }

    public function getDBConName(): string
    {
        return $this->dbName;
    }

    public function getDBConUsername(): string
    {
        return $this->dbUsername;
    }

    public function getDBConPassword(): string
    {
        return $this->dbPass;
    }

    public function getDBCharset(): string
    {
        return self::CHARSET;
    }

    public function getDSN(): string
    {
        return "mysql:host=$this->dbHost;port=$this->dbPort;dbname=$this->dbName;charset={$this->getDBCharset()}";
    }
}