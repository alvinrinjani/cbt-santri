<?php

class UsersModel
{
    private $table = DB_TABLE;
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function userAuth()
    {
        $username = $_POST['username'];
        $userpass = $_POST['userpass'];

        $sql = "SELECT * FROM {$this->table} WHERE username = '$username' AND userpass = '$userpass'";

        $this->db->query($sql);
        $this->db->execute();

        return $this->db->rowCount();

    }
    
    public function adminAuth($username, $userpass)
    {
        $sql = "SELECT * FROM {$this->table} WHERE username = '$username' AND userpass = '$userpass' AND is_admin = 1";

        $this->db->query($sql);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function time_stamp()
    {
        $time = new DateTime();
        $time->setTimezone(new DateTimeZone('Asia/Jakarta'));
        $time_stamp = $time->format('l, d-M-Y H:i:s');

        return $time_stamp;
    }

    public function getSingleUser($username)
    {
        $sql = "SELECT * FROM {$this->table} WHERE username = '$username'";

        $this->db->query($sql);

        return $this->db->single();
    }

    function get_file_extension($file_name)
    {
        $dot_index = strrpos($file_name, '.');
        if ($dot_index === false) {
            return '';
        }
        return substr($file_name, $dot_index);
    }

    public function submitAnswer()
    {
        $allowedFileExt = ['.php'];

        $usersession = $_POST['usersession'];
        $time_stamp = $this->time_stamp();
        $answerRawName = $_FILES['answer']['name'];
        $answerName = $usersession . $this->get_file_extension($answerRawName);
        $answerType = $_FILES['answer']['type'];
        $answerTmp = $_FILES['answer']['tmp_name'];
        $answerCheck = in_array($this->get_file_extension($answerRawName), $allowedFileExt);
        $targetDir = 'public/answer/' . basename($answerName);

        if(!$answerCheck && $answerType != 'application/x-php') {
            return false;
        } else {
            move_uploaded_file($answerTmp, $targetDir);
            chmod($targetDir . $answerName, 0777);
        }

        $sql = "UPDATE {$this->table} SET 
                php_answer = '$answerName',
                login_status = '2',
                time_stamp = '$time_stamp' 
                WHERE usersession = '$usersession'
        ";

        $this->db->query($sql);
        $this->db->execute();

        return $this->db->rowCount();
    }
    
}
