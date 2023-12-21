<?php
require_once __DIR__ . '/../helper.php';
include_once __DIR__ . '/../db/DatabaseConnection.php';

class UsersController
{
    private $connection;

    public function __construct()
    {
        $db = new DatabaseConnection();
        $this->connection = $db -> getConnection();
    }


    public function getUsers($role = "all") 
    {
        if($role === 'all')
        {
            $query = "SELECT * FROM `user`";
            $allUsers = mysqli_query($this->connection, $query);

            if ($allUsers->num_rows > 0) {
                while ($row = $allUsers->fetch_assoc()) {
                    $users[] = $row;
                }
            }

            $this->fixFormating($users);
            return $users;

        }
        $query = "SELECT * FROM `user` WHERE `role` = '$role'";
        $allUsers = mysqli_query($this->connection, $query);

        if ($allUsers->num_rows > 0) {
            while ($row = $allUsers->fetch_assoc()) {
                $users[] = $row;
            }
        }

        $this->fixFormating($users);
        return $users;

    }
    public function getWaitingPatients() {
        // Assuming $this->connection is your database connection
        
        $query = "SELECT u.id AS user_id, u.name AS user_name, u.email AS user_email,
                    p.id AS patient_id, p.waiting_for_analysis
                    FROM user u
                    LEFT JOIN patient p ON u.id = p.user_id
                    WHERE p.waiting_for_analysis = 1"; // Filter for waiting patients
        
        $result = mysqli_query($this->connection, $query);
    
        if (!$result) {
            return []; // Return an empty array if the query fails
        }
    
        $waitingPatients = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $waitingPatients[] = $row;
        }
    
        return $waitingPatients;
    
    }


    private function fixFormating(&$users)
    {
        foreach ($users as &$user) {
            if (!isset($user["deleted_at"])) {
                $user["deleted_at"] = '---';
            }
    
            if ($user['isDeleted'] == 1) {
                $user['isDeleted'] = 'NE';
            } else {
                $user['isDeleted'] = 'TAIP';
            }

            switch ($user['role']) {
                case 'admin':
                    $user['role'] = 'ADMINISTRATORIUS';
                    break;
                case 'doctor':
                    $user['role'] = 'Gydytojas';
                    break;
                case 'lab_worker':
                    $user['role'] = 'Laboratorijos darbuotojas'; 
                    break;
                case 'patient':
                    $user['role'] = 'Pacientas';
                    break;
                default:
                    $user['role'] = 'Svečias';
                    
            }
        }
    }
}

?>