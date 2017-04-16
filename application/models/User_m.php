<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

Class User_m extends CI_Model {

	function login($username, $password) {
	    // Cek ke database username dan password
		$this->db->select('id, username');
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->where('password', MD5($password));
		$this->db->limit(1);
		$query = $this->db->get();
        // Return hasil query yg berisi ID dan Username
		if ($query->num_rows() == 1) {
			return $query->result();
		} else {
			return false;
		}
	}

}
