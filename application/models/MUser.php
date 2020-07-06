<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MUser extends CI_Model {

	public function tambahAkun($data)
	{
		$this->db->insert('user',$data);
	}
	
	public function getForm(){
		$this->db->select('*');
		$this->db->from('form');

		return $this->db->get()->result();
    }
    
    public function cekAkun($email, $password){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('email', $email);
        $this->db->where('password', $password);

        return $this->db->get();
    }

	public function getFormByID($id){
		$this->db->select('*');
		$this->db->from('form');
		$this->db->where('id',$id);

		return $this->db->get()->result();
	}

	public function update($data){
		$this->db->update('form',$data);
	}
    
   
}
