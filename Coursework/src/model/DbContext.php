<?php
include_once "getDrinks.php";


class DbContext
{
    private $db_server = 'proj-mysql.uopnet.plymouth.ac.uk';
    private $dbUser = 'ISAD251_AParkin';
    private $dbPassword = 'ISAD251_22217531';
    private $dbDatabase = 'ISAD251_AParkin';

    private $dataSourceName;
    private $connection;

    public function __construct(PDO $connection = null)
    {
        $this->connection = $connection;
        try {
            if ($this->connection === null){
                $this->dataSourceName = 'mysql:dbname=' . $this->dbDatabase . ';host=' . $this->db_server;
                $this->connection = new PDO($this->dataSourceName, $this->dbUser, $this->dbPassword);
                $this->connection->setAttribute(
                    PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION
                );
            }
        }
        catch (PDOException $err){
            echo "Connection failed ". $err->getMessage();
        }
    }

    public function getInfo() {
        $sql = "SELECT * FROM `fooddrink`";

        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll(PDO::FETCH_ASSOC);

        $fooddrink = [];

        if ($results) {
            foreach($results as $row)
            {
                $menuitem = new MenuItem($row['id'], $row['itemName'], $row['itemDescription'], $row['stock'], $row['price']);
                $fooddrink[] = $menuitem;
            }
        }

        return $fooddrink;

    }

    public function checkDB($array) {
        $items = $this->getInfo();
        $newArray = array_keys($array);
        $values = array_values($array);
        for ($i = 0; $i < count($newArray); $i++) {
            if ($items[$i]->Quant() - $values[$i] < 0) {
                return false;
            }
        }
        return true;
    }
}

