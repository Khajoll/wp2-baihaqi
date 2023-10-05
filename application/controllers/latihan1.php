<?php
class latihan1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang.. selamat belajar Web Programing";
        //$this->load->view('view-latihan1');
    }

    public function penjumlahan($nilai1, $nilai2)
    {
        $this->load->model('Model_latihan1');
        $hasil = $this->Model_latihan1->jumlah($nilai1, $nilai2);
        echo "Hasil Penjumlahan dari". $nilai1 ." + ". $nilai2 ." = "
.$hasil;
    }
}