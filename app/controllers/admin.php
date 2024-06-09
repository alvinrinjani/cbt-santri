<?php

class admin extends Controller
{
    private $table = DB_TABLE;
    private $db;

    public function __construct()
    {
        if ($_SESSION['user'] != 'alvin') {
            header('Location: ' . BASEURL . 'main');
        }
    }

    public function index()
    {
        $data['user'] = $data['user'] = $this->model('AdminModel')->getAllUser();
        
        $this->view('admin/index', $data);
    }
    
    public function inputUsers()
    {
        $data['title'] = 'Admin | Input User';
        $data['user'] = $data['user'] = $this->model('AdminModel')->getAllUser();

        $this->view('admin/inputUsers', $data);
    }

    public function addUser()
    {
        if ($this->model('AdminModel')->addUserModel($_POST) > 0) {
            echo "<meta http-equiv='refresh' content='0;URL=" . BASEURL . "admin/inputUsers'>";
            exit;
       } else {
            echo "<meta http-equiv='refresh' content='0;URL=" . BASEURL . "admin/inputUsers'>";
            exit;
       }
    }

    public function listUsers()
    {
        $data['user'] = $this->model('AdminModel')->getAllUser();
        $data['table'] = DB_TABLE;

        $this->view('admin/listUsers', $data);
    }
}

?>