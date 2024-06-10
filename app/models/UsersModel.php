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
        $allowedFileExt = ['.js'];
        $time_stamp = $this->time_stamp();

        // JAWABAN NO. 4
        $a1 = $_FILES['a1'];
        $a1RawName = $a1['name'];
        $a1Name = $usersession . '_' . $a1RawName;
        $a1Type = $a1['type'];
        $a1Tmp = $a1['tmp_name'];
        $a1Check = in_array($this->get_file_extension($a1RawName), $allowedFileExt);
        $a1targetDir = 'public/answer/a1/' . basename($a1Name);
        
        // JAWABAN NO. 5 
        $a2 = $_FILES['a2'];
        $a2RawName = $a2['name'];
        $a2Name = $usersession . '_' . $a2RawName;
        $a2Type = $a2['type'];
        $a2Tmp = $a2['tmp_name'];
        $a2Check = in_array($this->get_file_extension($a2RawName), $allowedFileExt);
        $a2targetDir = 'public/answer/a2/' . basename($a2Name);

        if($a1Check) {
            if($a2Check) {

                //kode benar
                move_uploaded_file($a1Tmp, $a1targetDir);
                move_uploaded_file($a2Tmp, $a2targetDir);
                chmod($a1targetDir . $a1Name, 0777);
                chmod($a2targetDir . $a2Name, 0777);

            } else {
                return false;
            }
        } else {
            return false;
        }

        $sql = "UPDATE {$this->table} SET
                login_status = '2',
                a1 = '$a1Name',
                a2 = '$a2Name',
                time_stamp = '$time_stamp'
                WHERE usersession = '$usersession'
        ";

        $this->db->query($sql);
        $this->db->execute();

        // return CODE_1;
        return $this->db->rowCount();
        
        // var_dump($a1Check);


        // if(!$answerCheck && $answerType != 'application/x-php') {
        //     return false;
        // } else {
        //     move_uploaded_file($answerTmp, $targetDir);
        //     chmod($targetDir . $answerName, 0777);
        // }

        // $sql = "UPDATE {$this->table} SET 
        //         php_answer = '$answerName',
        //         login_status = '2',
        //         time_stamp = '$time_stamp' 
        //         WHERE usersession = '$usersession'
        // ";

        // $this->db->query($sql);
        // $this->db->execute();

        // return $this->db->rowCount();
    }
    
}
