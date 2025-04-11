<?php



interface DatabaseConnectionInterface
{
    public function connect();
}


class MySqlConnection implements DatabaseConnectionInterface
{
    public function connect()
    {
        // Code to connect to MySQL database
    }
}

class MariaDBConnection implements DatabaseConnectionInterface
{
    public function connect()
    {
        // Code to connect to mariaDb database
    }
}

class User
{
    private $dbConnection;

    public function __construct(DatabaseConnectionInterface $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    public function getUserData()
    {
        // Code to retrieve user data using $this->dbConnection
    }
}

// Usage example
$mysqlConnection = new MySqlConnection();
$user = new User($mysqlConnection);
$userData = $user->getUserData();

$mariaDbConnection = new MariaDBConnection();
$user = new User($mariaDbConnection);
$userData = $user->getUserData();



