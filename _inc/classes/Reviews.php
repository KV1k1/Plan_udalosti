<?php

class Reviews extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = $this->db_connection();
    }

    public function getReviews()
    {
        try {
            $query = "SELECT * FROM reviews";
            $result = $this->db->query($query);
            $reviews = [];
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                $reviews[] = $row;
            }
            return $reviews;
        } catch (PDOException $e) {
            echo "Error retrieving reviews: " . $e->getMessage();
            return [];
        }
    }
    
    public function deleteReview($review_id)
    {
        try {
            $data = array(
                'review_id' => $review_id
            );
            $query = "DELETE FROM reviews WHERE id = :review_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function selectSingleReview($review_id)
    {
        try {
            $data = array('review_id' => $review_id);
            $query = "SELECT * FROM reviews WHERE id = :review_id";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
            $review_data = $query_run->fetch();
            return $review_data;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function editReview($review_id, $new_data)
    {
        try {
            $data = array(
                'review_id' => $review_id,
                'name' => $new_data['name'],
                'event' => $new_data['event'],
                'review' => $new_data['review'],
                'image' => $new_data['image']
            );

            $query = "UPDATE reviews SET 
                        name = :name, 
                        event = :event, 
                        review = :review, 
                        image = :image 
                      WHERE id = :review_id";

            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function insertReview($data)
    {
        try {
            $query = "INSERT INTO reviews (name, event, review, image)
                      VALUES (:name, :event, :review, :image)";
            $query_run = $this->db->prepare($query);
            $query_run->execute($data);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

?>
