<?php namespace App\D;

// Import the DatabaseConnection interface and the classes that implement it
// Dependency inversion principle

interface DatabaseConnection
{
    public function connect();
}
class MySQLConnection implements DatabaseConnection
{
    public function connect()
    {
        // Handle the database connection
    }
}
class SQLConnection implements DatabaseConnection
{
    public function connect()
    {
        // Handle the SQL connection
    }
}


class PasswordReminder {

    public function __construct(DatabaseConnection $dbConnection)
    {
        $dbConnection->connect();
    }
}