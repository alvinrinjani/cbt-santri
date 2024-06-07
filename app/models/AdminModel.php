<?php

class AdminModel
{
    private $table = DB_TABLE;
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        // $sql = "SELECT * FROM {$this->table}";
        $this->db->query("SELECT * FROM {$this->table} WHERE user_id != 1");
        // $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function addUserModel()
    {
        $username = $_POST['username'];
        $usersession = $_POST['usersession'];
        $userpass = $_POST['userpass'];
        
        // $data_user = [$username, $usersession, $userpass];
        // var_dump($data_user);
        // die;

        $sql = "INSERT INTO {$this->table} (username, usersession, userpass) VALUES ('$username', '$usersession', '$userpass')";

        $this->db->query($sql);
        $this->db->execute();

        return $this->db->rowCount();
    }
}

?>