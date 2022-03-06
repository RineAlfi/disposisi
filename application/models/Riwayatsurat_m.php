<?php
class Riwayatsurat_m extends CI_model
{
	function tampil_data($table){
		return $this->db->get($table);
	}

    function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }

	public function getDetail($id)
	{
		return $this->db->where('id_suratmasuk', $id)->get('surat_masuk')->row();
	}

	public function detailupdate($table, $ket){
        $query = $this->db->get_where($table, $ket)->row();
        return $query;
    }

	public function update($table, $data, $ket)
    {
        $this->db->where($ket);
        $this->db->update($table, $data);
    }

	public function detail_data($sifatsurat_id)
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->join('sifat_surat', 'sifat_surat.id_sifatsurat = surat_masuk.sifatsurat_id', 'left');
        $this->db->where('surat_masuk.id_suratmasuk', $sifatsurat_id);
        $query = $this->db->get();
        return $query->row();
	}

	function join2left()
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->join('data_pegawai', 'data_pegawai.nip= surat_masuk.status', 'left');
        // $this->db->where($ket);
        $this->db->order_by('id_suratmasuk', 'DESC');
        $query = $this->db->get();
        return $query->result();
    }

    function join2()
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->join('data_pegawai', 'data_pegawai.nip = surat_masuk.status', 'inner');
        // $this->db->where($ket);
        $query = $this->db->get();
        return $query->result();
    }

	// public function join3inner()
    // {
    //     $this->db->select('*');
    //     $this->db->from('riwayat_disposisi');
    //     $this->db->join('surat_masuk', 'surat_masuk.id_suratmasuk = riwayat_disposisi.suratmasuk_id', 'inner');
    //     // $this->db->join('data_pegawai', 'data_pegawai.nip = riwayat_disposisi.nip', 'inner');
    //     // $this->db->where($ket, $param);
    //     $query = $this->db->get();
    //     return $query->result();
    // }
}