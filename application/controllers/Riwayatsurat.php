<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayatsurat extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Riwayatsurat_m');
        $this->load->helper('url');
    }
    function index()
    {
        $data['suratmasuk'] = $this->Riwayatsurat_m->join3inner();
        // $data['suratmasuk'] = $this->Riwayatsurat_m->get('surat_masuk');
        $data['title'] = "Riwayat Surat Masuk | Disposisi";
        $this->load->view('template/template',$data);
		$this->load->view('RiwayatSurat/v_riwayatsuratmasuk',$data);
        $this->load->view('template/footer',$data);
        var_dump($data['suratmasuk']);
    }

}