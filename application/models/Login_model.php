<?php
class Login_model extends CI_Model
{

	function validate($email, $password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$result = $this->db->get('user', 1);
		return $result;
	}

	public function mendaftar($data)
	{
		$password = $this->input->POST('password');
		$cpassword = $this->input->POST('cpassword');
		if ($password != $cpassword) {
			$this->session->set_flashdata('warn', 'Password tidak sesuai!');
			redirect(base_url('login/register'));
		} else {
	
			$this->db->insert('user', $data);
			$this->session->set_flashdata('suc', 'Selamat akun Anda sudah terdaftar:) Silahkan Login');
			redirect(base_url('register'));
		}
	}
}
