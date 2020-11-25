<?php
class dbConnect
{

    public $conn;

    function __construct()
    {
        require_once('dbConfig.php');
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABSE);
        if (!$conn) // testing the connection  
        {
            die("Cannot connect to the database");
        }
        return $conn;
    }
    public function Close()
    {
        $conn->close();
    }
}
