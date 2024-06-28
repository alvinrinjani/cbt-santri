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
        $this->db->query("SELECT * FROM {$this->table} WHERE user_id != 1");
        return $this->db->resultSet();
    }

    public function addUserModel()
    {
        $username = $_POST['username'];
        $usersession = $_POST['usersession'];
        $userpass = $_POST['userpass'];

        $sql = "INSERT INTO {$this->table} (username, usersession, userpass) VALUES ('$username', '$usersession', '$userpass')";

        $this->db->query($sql);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function resetUser()
    {
        $usersession = $_POST['usersession'];

        $sql = "UPDATE {$this->table} SET 
                login_status = 0,
                a1 = NULL,
                a2 = NULL,
                a3 = NULL,
                a4 = NULL,
                a5 = NULL,
                time_stamp = NULL
                WHERE usersession = '$usersession'";

        $this->db->query($sql);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function lihatJawaban()
    {
        $sql = "SELECT * FROM {$this->table} WHERE user_id != 1";

        $this->db->query($sql);
        return $this->db->resultSet();
    }

    public function listUsersModel()
    {

    }
}

?>