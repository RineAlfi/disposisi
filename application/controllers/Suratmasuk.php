<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SuratMasuk extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Suratmasuk_m');
        $this->load->helper('url');
    }
    function index()
    {
        $data['suratmasuk'] = $this->Suratmasuk_m->tampil_data('surat_masuk')->result();
        // $data['suratmasuk'] = $this->Suratmasuk_m->join2inner();
        $data['title'] = "Surat Masuk | Disposisi";
        $this->load->view('template/template',$data);
		$this->load->view('SuratMasuk/v_suratmasuk',$data);
        $this->load->view('template/footer',$data);
    }
    
    function tambah()
	{
        $data['sifatsurat'] = $this->Suratmasuk_m->get('sifat_surat');
        $this->form_validation->set_rules('sifatsurat_id', 'Sifat Surat', 'required');
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('tanggal_surat', 'Tanggal Surat', 'required');
        $this->form_validation->set_rules('tanggal_input', 'Tanggal Input', 'required');
        $this->form_validation->set_rules('no_surat', 'No Surat', 'required');
        $this->form_validation->set_rules('no_urut', 'No Urut', 'required');
        $this->form_validation->set_rules('asal_surat', 'Asal Surat', 'required');
        $this->form_validation->set_rules('perihal', 'Perihal/Isi Surat', 'required');

        if ($this->form_validation->run() == false){
            $data['title'] = 'Tambah Surat Masuk | Disposisi';
            $this->load->view('template/template', $data);
            $this->load->view('SuratMasuk/v_tambahsuratmasuk', $data);
            $this->load->view('template/footer', $data);
        } else {
            $dokumen = $_FILES['dokumen']['name'];
            if ($dokumen) {
                $config['upload_path'] = './assets/file/suratmasuk';
                $config['allowed_types'] = 'jepg|jpg|png|pdf|docx|zip';
                $config['max_size']     = '30000';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('dokumen')) {
                    $dokumen = $this->upload->data('file_name');
                } else {
                    echo "Unggah file gagal!";
                }
            } else {
            }
            $id = $this->Suratmasuk_m->idsm();
            $data = [
                'id_suratmasuk' => $id,
                'sifatsurat_id' => $this->input->post('sifatsurat_id'),
                'kode' => $this->input->post('kode'),
                'tanggal_surat' => $this->input->post('tanggal_surat'),
                'tanggal_input' => $this->input->post('tanggal_input'),
                'no_surat' => $this->input->post('no_surat'),
                'no_urut' => $this->input->post('no_urut'),
                'asal_surat' => $this->input->post('asal_surat'),
                'dokumen' => $dokumen,
                'perihal' => $this->input->post('perihal'),
                'status' => 'Belum Disposisi'
            ];
            $this->Suratmasuk_m->input_data($data, 'surat_masuk');
            $data2 = [
                'suratmasuk_id' => $id,
            ];
            // var_dump($id);
            $this->Suratmasuk_m->input_data($data2, 'riwayat_surat');
            $this->session->set_flashdata('sukses', 'Surat Masuk Berhasil Ditambahkan');
            redirect('suratmasuk');
        }
    }
        
    private function _validasi()
    {
        $this->form_validation->set_rules('sifatsurat_id', 'Sifat Surat', 'required');
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('tanggal_surat', 'Tanggal Surat', 'required');
        $this->form_validation->set_rules('tanggal_input', 'Tanggal Input', 'required');
        $this->form_validation->set_rules('no_surat', 'No Surat', 'required');
        $this->form_validation->set_rules('no_urut', 'No Urut', 'required');
        $this->form_validation->set_rules('asal_surat', 'Asal Surat', 'required');
        $this->form_validation->set_rules('perihal', 'Perihal/Isi Surat', 'required');
    }

    function edit($id_suratmasuk)
    {
        $this->_validasi();
        $data['detail'] = $this->Suratmasuk_m->getDetail($id_suratmasuk);
        $data['sifatsurat'] = $this->Suratmasuk_m->get('sifat_surat');
        $data['suratmasuk'] = $this->Suratmasuk_m->get('surat_masuk', ['id_suratmasuk' => $id_suratmasuk]);
        $data['title'] = 'Edit Surat Masuk | Disposisi';
        $this->load->view('template/template', $data);
        $this->load->view('Suratmasuk/v_editsuratmasuk', $data);
        $this->load->view('template/footer', $data);
    }

    public function simpan()
    {
        $id_suratmasuk = $this->input->post('id');
        $ket = ['id_suratmasuk' => $id_suratmasuk];
        $detail = $this->Suratmasuk_m->detailupdate('surat_masuk', $ket);
        // // var_dump($detail);
            $dokumen = $_FILES['dokumen']['name'];
            if ($dokumen) {
                $config['upload_path']   = './assets/file/suratmasuk';
                $config['allowed_types'] = 'jepg|jpg|png|pdf|docx|zip';
                $config['max_size']      = '30000';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('dokumen')) {
                    $dokumen_lama = $detail->dokumen;
                    $dokumen = $this->upload->data('file_name');
                } else {
                    echo "Unggah file gagal!";
                }
            } else {
                $dokumen= $detail->dokumen;
            }
        $data = [
            'sifatsurat_id' => $this->input->post('sifatsurat_id'),
            'kode' => $this->input->post('kode'),
            'tanggal_surat' => $this->input->post('tanggal_surat'),
            'tanggal_input' => $this->input->post('tanggal_input'),
            'no_surat' => $this->input->post('no_surat'),
            'no_urut' => $this->input->post('no_urut'),
            'asal_surat' => $this->input->post('asal_surat'),
            'dokumen' => $dokumen,
            'perihal' => $this->input->post('perihal')
        ];
        // var_dump($data);
        $this->Suratmasuk_m->update('surat_masuk', $data, $ket);
        $this->session->set_flashdata('sukses', 'Surat Masuk Berhasil Diubah');
        redirect('suratmasuk');
    }

    function detail($id_suratmasuk)
    {
        $detail = $this->Suratmasuk_m->detail_data($id_suratmasuk);
        $data['detail'] = $detail;
        $sifatsurat_id = $detail->sifatsurat_id;
        $ket = ['id_suratmasuk' => $id_suratmasuk];
        $data['datapeg'] = $this->Suratmasuk_m->join2inner($ket, $id_suratmasuk);
        // var_dump( $data['datapeg']);
        $data['suratmasuk'] = $this->Suratmasuk_m->get('surat_masuk', ['id_suratmasuk' => $id_suratmasuk]);
        $data['title'] = 'Detail Surat Masuk | Disposisi';
        $this->load->view('template/template', $data);
        $this->load->view('Suratmasuk/v_detailsuratmasuk', $data);
        $this->load->view('template/footer', $data);
    }

    function hapus($id_suratmasuk)
	{
		$where = array('id_suratmasuk' => $id_suratmasuk);
		$this->Suratmasuk_m->hapus_data($where, 'surat_masuk');
        $this->session->set_flashdata('sukses', 'Surat Masuk Berhasil Dihapus');
		redirect('suratmasuk');
	}
}