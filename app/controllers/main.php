<?php

class main extends Controller
{
    public function __construct()
    {
        Sessioner::logSession();
    }

    public function index()
    {
        $data['user'] = $this->model('UsersModel')->getSingleUser($_SESSION['user']);

        $this->view('main/index', $data);
    }

    public function submitAnswer()
    {
        if ($this->model('UsersModel')->submitAnswer($_POST) > 0) {
            echo 'success';
            echo "<meta http-equiv='refresh' content='1;URL=" . BASEURL . "main'>";
            exit;
       } else {
            echo 'failed';
            echo "<meta http-equiv='refresh' content='1;URL=" . BASEURL . "main'>";
            exit;
       }
    }
}

?>