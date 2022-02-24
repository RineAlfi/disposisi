<?php
class Riwayatdisposisi_m extends CI_model
{
	public function tampil_data($table){
		return $this->db->get($table);
	}

    public function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data($where,$table){
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

    function join2($table, $table2, $ktabel21, $ket, $param)
    {

        $this->db->select('*');
        $this->db->from($table);
        $this->db->join($table2, $ktabel21, 'left');
        $this->db->where($ket, $param);
        $query = $this->db->get();
        return $query->row();
    }

    public function detailupdate($table, $ket){
        $query = $this->db->get_where($table, $ket)->row();
        return $query;
    }

}