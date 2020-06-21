<?php

class Database
{
    protected $connection;
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'mvcproject';

    public function __construct()
    {
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
        mysqli_query($this->connection, 'SET NAMES "utf8"');
    }
}