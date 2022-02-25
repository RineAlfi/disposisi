<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayatdisposisi extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->Model('Riwayatdisposisi_m');
        $this->load->helper('url');
    }
    function index()
    {
        $data['riwayatdisposisi'] = $this->Riwayatdisposisi_m->tampil_data('riwayat_disposisi')->result();
        // $data['riwayatdisposisi'] = $this->Riwayatdisposisi_m->get('riwayat_disposisi');
        $data['title'] = "Surat Masuk | Disposisi";
        $this->load->view('template/template',$data);
		$this->load->view('RiwayatDisposisi/v_riwayatdisposisi',$data);
        $this->load->view('template/footer',$data);
    }
    
    function tambah($id_suratmasuk)
	{
        $data['data_pegawai'] = $this->Riwayatdisposisi_m->get('data_pegawai');
        $data['riwayatdisposisi'] = $this->Riwayatdisposisi_m->get('riwayat_disposisi');
        $data['sifatsurat'] = $this->Riwayatdisposisi_m->get('sifat_surat');
        $data['suratmasuk'] = $this->Riwayatdisposisi_m->get('surat_masuk', ['id_suratmasuk' => $id_suratmasuk]);
        $data['riwayatdisposisi'] = $this->Riwayatdisposisi_m->get('riwayat_disposisi');
        $ket1 = 'sifat_surat.id_sifatsurat = surat_masuk.sifatsurat_id';
        $ket2 = 'surat_masuk.id_suratmasuk';
        $surat = $this->Riwayatdisposisi_m->join2('surat_masuk', 'sifat_surat', $ket1, $ket2, $id_suratmasuk);
        
        $this->form_validation->set_rules('kepada', 'Diteruskan Kepada', 'required');
        $this->form_validation->set_rules('isi', 'Isi', 'required');

        $data['title'] = 'Tambah Surat Masuk | Disposisi';
        $this->load->view('template/template', $data);
        $this->load->view('RiwayatDisposisi/v_tambahdisposisi', $data);
        $this->load->view('template/footer', $data);
    }

    public function tambah_aksi()
    {
        $id_riwayat = $this->input->post('id_riwayat');
        $ket = ['id_riwayat' => $id_riwayat];
        $detail = $this->Riwayatdisposisi_m->detailupdate('riwayat_disposisi', $ket);
        // $dokumen = $_FILES['dokumen']['name'];
        //     if ($dokumen) {
        //         $config['upload_path'] = './assets/file/suratmasuk';
        //         $config['allowed_types'] = 'jepg|jpg|png|pdf|docx|zip';
        //         $config['max_size']     = '30000';
        //         $this->load->library('upload', $config);
        //         if ($this->upload->do_upload('dokumen')) {
        //             $dokumen = $this->upload->data('file_name');
        //         } else {
        //             echo "Unggah file gagal!";
        //         }
        //     } else {
        //     }
            $data = [
                'nip' => $this->input->post('nip'),
                'isi' =>  $this->input->post('isi'),
                'catatan' => $this->input->post('catatan'),
                'catatantam' => $this->input->post('catatantam'),
                
                // 'sifatsurat_id' => $this->input->post('sifatsurat_id'),
                // 'kode' => $this->input->post('kode'),
                // 'tanggal_surat' => $this->input->post('tanggal_surat'),
                // 'tanggal_input' => $this->input->post('tanggal_input'),
                // 'no_surat' => $this->input->post('no_surat'),
                // 'no_urut' => $this->input->post('no_urut'),
                // 'asal_surat' => $this->input->post('asal_surat'),
                // 'dokumen' => $dokumen,
                // 'perihal' => $this->input->post('perihal')
            ];
            var_dump($data);
            // $this->Riwayatdisposisi_m->input_data($data, 'riwayat_disposisi');
            // $this->session->set_flashdata('sukses', 'Disposisi Berhasil Ditambahkan');
            // redirect('riwayatdisposisi');
        // }
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
        $data['detail'] = $this->Riwayatdisposisi_m->getDetail($id_suratmasuk);
        $data['sifatsurat'] = $this->Riwayatdisposisi_m->get('sifat_surat');
        $data['suratmasuk'] = $this->Riwayatdisposisi_m->get('surat_masuk', ['id_suratmasuk' => $id_suratmasuk]);
        $data['title'] = 'Edit Surat Masuk | Disposisi';
        $this->load->view('template/template', $data);
        $this->load->view('Suratmasuk/v_editsuratmasuk', $data);
        $this->load->view('template/footer', $data);
    }

    public function simpan()
    {
        $id_suratmasuk = $this->input->post('id');
        $ket = ['id_suratmasuk' => $id_suratmasuk];
        $detail = $this->Riwayatdisposisi_m->detailupdate('surat_masuk', $ket);
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
        $this->Riwayatdisposisi_m->update('surat_masuk', $data, $ket);
        $this->session->set_flashdata('sukses', 'Surat Masuk Berhasil Diubah');
        redirect('suratmasuk');
    }

    function detail($id_suratmasuk)
    {
        $detail = $this->Riwayatdisposisi_m->detail_data($id_suratmasuk);
        $data['detail'] = $detail;
        $sifatsurat_id = $detail->sifatsurat_id;
        // var_dump( $data['detail']);
        // $data['suratmasuk'] = $this->Riwayatdisposisi_m->get('surat_masuk', ['id_suratmasuk' => $id_suratmasuk]);
        $data['title'] = 'Edit Surat Masuk | Disposisi';
        $this->load->view('template/template', $data);
        $this->load->view('Suratmasuk/v_detailsuratmasuk', $data);
        $this->load->view('template/footer', $data);
    }

    function hapus($id_suratmasuk)
	{
		$where = array('id_suratmasuk' => $id_suratmasuk);
		$this->Riwayatdisposisi_m->hapus_data($where, 'surat_masuk');
        $this->session->set_flashdata('sukses', 'Surat Masuk Berhasil Dihapus');
		redirect('suratmasuk');
	}
}