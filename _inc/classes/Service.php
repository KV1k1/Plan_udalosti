<?php

class Service extends Database
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function getAllServices()
    {
        $query = "SELECT * FROM Services";
        $result = $this->db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
