<?php

class beranda extends Controller
{
    public function __construct()
    {
        Sessioner::logSession();
    }

    public function index()
    {
        $data['title'] = 'SI-PUSAT | Beranda';
        $data['cekUser'] = ($_SESSION['user'] == 'Guru') ? BASEURL . 'DataNilai/forbidden' : BASEURL . 'Walkas/index';

        $this->view('templates/header', $data);
        $this->view('beranda/index', $data);
        $this->view('templates/footer');
    }

    public function download()
    {
        $data['title'] = 'SI-PUSAT | Download Form Rapor';
        $data['page'] = 'Download Form Nilai Rapor';
        $data['pageDosen'] = 'Download Form Nilai Akademik';

        $this->view('templates/header', $data);
        $this->view('beranda/download', $data);
        $this->view('templates/footer');
    }

    public function dosen()
    {
        $data['title'] = 'SI-PUSAT | Beranda Dosen';
        $data['page'] = 'Download Form Nilai Rapor';

        $this->view('templates/header', $data);
        $this->view('beranda/dosen', $data);
        $this->view('templates/footer');
    }
}
