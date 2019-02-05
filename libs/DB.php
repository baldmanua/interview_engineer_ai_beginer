<?php


class DB
{
    private static $_instance = null;

    public static function getInstance()
    {
        if(self::$_instance) {
            return self::$_instance;
        } else {
            self::$_instance = new self();
            self::$_instance->connect();
            return self::$_instance;
        }
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private $host = 'localhost';
    private $user = 'lysenko';
    private $password = 'lysenko';
    private $db = 'test';
    private $connection = null;

    private function connect()
    {
        $this->connection = mysqli_connect(
            $this->host,
            $this->user,
            $this->password,
            $this->db
        );
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function query($query)
    {
        if(!$this->connection) {
            $this->connect();
        }
        $result = mysqli_query($this->connection, $query);

        if(gettype($result) == "boolean"){
            return $result;
        }
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }

        if(count($rows) == 1) {
            return $rows[0];
        } else {
            return $rows;
        }
    }

}