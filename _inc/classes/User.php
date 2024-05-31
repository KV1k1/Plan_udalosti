<?php

class User extends Database
{
    private $db;

    public function __construct()
    {
        $this->db = $this->db_connection();
    }

    public function login($useremail, $password)
    {
        try {
            $data = array(
                'user_email' => $useremail,
                'user_password' => $password,
            );
            $sql = "SELECT * FROM User WHERE email = :user_email AND password = :user_password";
            $query_run = $this->db->prepare($sql);
            $query_run->execute($data);
            $n_rows = $query_run->rowCount();
            if ($n_rows == 1) {
                // login je uspesny
                $_SESSION['logged_in'] = true;
                $user = $query_run->fetch();
                $_SESSION['is_admin'] = $user->role;
                $_SESSION['email'] = $user->email;
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function register($email, $password)
    {
        try {
            $hashed_password = $password;

            // Dáta pre vloženie nového používateľa do databázy
            $data = array(
                'user_email' => $email,
                'user_password' => $hashed_password,
                'user_role' => '0'
            );

            // SQL dopyt na vloženie nového používateľa
            $sql = "INSERT INTO User (email, password, role) VALUES (:user_email, :user_password, :user_role)";
            $query_run = $this->db->prepare($sql);
            $query_run->execute($data);

            // Úspešná registrácia
            return true;
        } catch (PDOException $e) {
            // Spracovanie chyby, ak nastane
            echo "Chyba pri registrácii: " . $e->getMessage();
            return false;
        }
    }

    public function getUserDetails($email)
    {
        try {
            $sql = "SELECT email, password FROM User WHERE email = :email";
            $query_run = $this->db->prepare($sql);
            $query_run->execute(['email' => $email]);
            return $query_run->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Chyba pri získavaní údajov používateľa: " . $e->getMessage();
            return false;
        }
    }

    public function updatePassword($email, $new_password)
    {
        try {
            $sql = "UPDATE User SET password = :new_password WHERE email = :email";
            $query_run = $this->db->prepare($sql);
            return $query_run->execute([
                'new_password' => $new_password,
                'email' => $email
            ]);
        } catch (PDOException $e) {
            echo "Chyba pri aktualizácii hesla: " . $e->getMessage();
            return false;
        }
    }
}
?>
