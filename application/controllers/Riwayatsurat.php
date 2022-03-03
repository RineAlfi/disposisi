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
        $data['suratmasuk'] = $this->Riwayatsurat_m->join2inner();
        // $data['suratmasuk'] = $this->Riwayatsurat_m->get('surat_masuk');
        $data['title'] = "Riwayat Surat Masuk | Disposisi";
        $this->load->view('template/template',$data);
		$this->load->view('RiwayatSurat/v_riwayatsuratmasuk',$data);
        $this->load->view('template/footer',$data);
        // var_dump($data['suratmasuk']);
    }

    function detail($id_suratmasuk)
    {
        $detail = $this->Riwayatsurat_m->detail_data($id_suratmasuk);
        $data['detail'] = $detail;
        $sifatsurat_id = $detail->sifatsurat_id;
        // var_dump( $data['detail']);
        // $data['suratmasuk'] = $this->Suratmasuk_m->get('surat_masuk', ['id_suratmasuk' => $id_suratmasuk]);
        $data['title'] = 'Detail Riwayat Surat Masuk | Disposisi';
        $this->load->view('template/template', $data);
        $this->load->view('RiwayatSurat/v_detailriwayatsurat', $data);
        $this->load->view('template/footer', $data);
    }

}