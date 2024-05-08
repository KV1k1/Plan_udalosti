<?php

class Table extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = $this->db_connection();
    }

    public function getAllEvents()
    {
        try {
            $query = "SELECT * FROM event_type";
            $result = $this->db->query($query);
            $events = [];
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $events[] = $row;
            }
            return $events;
        } catch (PDOException $e) {
            echo "Error retrieving events: " . $e->getMessage();
            return [];
        }
    }

    public function select() {
        try {
            $query = "SELECT * FROM event_type";
            $result = $this->db->query($query);
            $services = $result->fetchAll(PDO::FETCH_ASSOC);
            return $services;
        } catch (PDOException $e) {
            echo "Error retrieving services: " . $e->getMessage();
            return [];
        }
    }
    
    
    public function delete($service_id){
        try{
            $data = array(
                'service_id' => $service_id
            );
            $query = "DELETE FROM event_type WHERE id = :service_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function select_single($service_id){
        try{
            $data = array('service_id'=>$service_id);
            $query = "SELECT * FROM event_type WHERE id = :service_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
            $service_data = $query_run->fetch();
            return $service_data;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function edit($service_id, $new_data){
        try{
            $data = array(
                'service_id' => $service_id,
                'event_type' => $new_data['event_type'],
                'participants_min' => $new_data['participants_min'],
                'participants_max' => $new_data['participants_max'],
                'duration' => $new_data['duration'],
                'price_min' => $new_data['price_min'],
                'price_max' => $new_data['price_max']
            );
            
            $query = "UPDATE event_type SET 
                        event_type = :event_type, 
                        participants_min = :participants_min, 
                        participants_max = :participants_max, 
                        duration = :duration, 
                        price_min = :price_min, 
                        price_max = :price_max 
                      WHERE id = :service_id";
                      
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
             
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }


    public function insert($data){
        try{
            $query = "INSERT INTO event_type (event_type, participants_min, participants_max, duration, price_min, price_max)
                      VALUES (:event_type, :participants_min, :participants_max, :duration, :price_min, :price_max)";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
    
    
    
}

?>
