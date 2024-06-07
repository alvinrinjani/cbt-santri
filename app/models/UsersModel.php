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
        $usersession = $_POST['usersession'];
        $allowedFileExt = ['.html'];
        $time_stamp = $this->time_stamp();

        // JAWABAN ESSAY 1 - 3
        $a1 = $_POST['a1'];
        $a2 = $_POST['a2'];
        $a3 = $_POST['a3'];

        // JAWABAN NO. 4
        $a4 = $_FILES['a4'];
        $a4RawName = $a4['name'];
        $a4Name = $usersession . '_' . $a4RawName;
        $a4Type = $a4['type'];
        $a4Tmp = $a4['tmp_name'];
        $a4Check = in_array($this->get_file_extension($a4RawName), $allowedFileExt);
        $a4targetDir = 'public/answer/a4/' . basename($a4Name);
        
        // JAWABAN NO. 5 
        $a5 = $_FILES['a5'];
        $a5RawName = $a5['name'];
        $a5Name = $usersession . '_' . $a5RawName;
        $a5Type = $a5['type'];
        $a5Tmp = $a5['tmp_name'];
        $a5Check = in_array($this->get_file_extension($a5RawName), $allowedFileExt);
        $a5targetDir = 'public/answer/a5/' . basename($a5Name);

        var_dump($a5Tmp);
        die;




        // if(!$a4Check && $a4Type != 'text/html') {
        //     return false;
        // } else {
        //     move_uploaded_file($a4Tmp, $targetDir);
        //     chmod($targetDir . $a4Name, 0777);
        // }

        $sql = "UPDATE {$this->table} SET 
                php_answer = '$a4Name',
                login_status = '2',
                time_stamp = '$time_stamp' 
                WHERE usersession = '$usersession'
        ";

        $this->db->query($sql);
        $this->db->execute();

        return $this->db->rowCount();
    }
    
}
