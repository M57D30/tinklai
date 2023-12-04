<?php

class DatabaseConnection
{
    private $connection;

    public function __construct()
    {
        $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

        if ($connection->connect_error) {
            throw new Exception("Database connectionection error: " . $connection->connect_error);
        }
        $this->connection = $connection;
    }

    public function getConnection()
    {
        return $this->connection;
    }
}
?>