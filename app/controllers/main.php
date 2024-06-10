<?php

class main extends Controller
{
    private $successSubmit = "<script>alert('Jawaban berhasil dikirim! Terima kasih.');</script>";
    private $failedSubmit = "<script>alert('Gagal mengirimkan jawaban! Coba lagi.');</script>";

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
        $data['user'] = $this->model('UsersModel')->getSingleUser($_SESSION['user']);

        $this->view('main/index', $data);

        if ($this->model('UsersModel')->submitAnswer($_POST) > 0) {
            echo $this->successSubmit;
            echo "<meta http-equiv='refresh' content='0;URL=" . BASEURL . "main'>";
            exit;
       } else {
            echo $this->failedSubmit;
            echo "<meta http-equiv='refresh' content='0;URL=" . BASEURL . "main'>";
            exit;
       }
    }
}

?>