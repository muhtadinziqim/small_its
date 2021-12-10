<?php
class M_user extends CI_Model{

	public function get_all($table)
	{
        $this->db->from($table);
		$query = $this->db->get();
		return $query->result();
	}

	public function insert($data, $table)
	{
		$this->db->insert($table, $data);
       	return TRUE;
	}

	function delete($where,$table){
        $this->db->where($where);
        $this->db->delete($table);
        return true;
    }

    function detail($where,$table){      
       $query = $this->db->get_where($table,$where);
       return $query->result();
    }

    function update($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
        return true;
    }

}