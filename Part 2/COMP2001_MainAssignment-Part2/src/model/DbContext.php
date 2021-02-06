<?php

include_once 'module.php';

class DbContext
{
    /*Setting up properties and database configuration*/

    private $db_server = 'socem1.uopnet.plymouth.ac.uk';
    private $dbUser = 'TGardner';
    private $dbPassword = 'OgpB972*';
    private $dbDatabase = 'COMP2001_TGardner';

    private $dataSourceName;
    private $connection;

    public function __construct(PDO $connection = null){ // Default construtor

        $this->connection = $connection; //This will assign the connection to whatever is coming in

        try {
            // To see if the connection has anything in it

            if ($this->connection === null ) { // if connection is null, then something will need to be done
                $this->dataSourceName = 'sql:dbname=' . $this->dbDatabase . ';hosts=' . $this->db_server; // This says what kind of Database it is and what kind of host that will be found on that server
                $this->connection = new PDO($this->dataSourceName, $this->dbUser, $this->dbPassword); // connection is setup using the dataSourseName here which contains a username and password
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Here we set the attributes so that the error mode is exception
            }// this now sets up our constructor
        }
        catch (PDOException $err) {
            echo 'Connection Failed ', $err->getMessage();
        }
    }

    public function Users() {
        $sql = "SELECT * FROM `Users`";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $resultSet = $statement->fetchAll(PDO::FETCH_ASSOC);

        $UsersF = [];

        if($resultSet)
        {
            foreach ($resultSet as $row)
            {
                $users = new User($row['code'], $row['Title'], $row['Title'], $row['UserID']);
                $UsersF[] = $users;
            }
        }
        return $users;
    }
}