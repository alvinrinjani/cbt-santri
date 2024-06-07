<?php

class login extends Controller
{
    public function __construct()
    {
        if (isset($_SESSION['user'])) {
            header('Location: ' . BASEURL . 'main');
        }
    }

    public function index()
    {
        $this->view('login/index');
    }

    public function auth()
    {
        $username = $_POST['username'];
        $userpass = $_POST['userpass'];

        if ($this->model('UsersModel')->userAuth($_POST) > 0) {
            if ($this->model('UsersModel')->adminAuth($username, $userpass) > 0) {
                $_SESSION['user'] = 'alvin';
                header('Location: '. BASEURL . 'admin');
            } else {
                $_SESSION['user'] = $username;
                header('Location: '. BASEURL . 'main');
            }
        } else {
            $this->view('login/index');
        }

    }

    public function logout()
    {
        session_unset();
        session_destroy();
        header('Location: ' . BASEURL . 'Login');
        exit;
    }
}

?>