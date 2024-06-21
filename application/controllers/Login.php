<?php
class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}

	function index()
	{
		$this->load->view('auth/v_login');
	}

	function auth()
	{
		$email = $this->input->post('email', TRUE);
		$password = md5($this->input->post('password', TRUE));
		$validate = $this->Login_model->validate($email, $password);
		if ($validate->num_rows() > 0) {
			$data = $validate->row_array();
			$username = $data['username'];
			$email = $data['email'];
			$role = $data['role'];
			$sesdata = [
				'username' => $username,
				'email' => $email,
				'role' => $role,
				'logged_in' => TRUE
			];

			$this->session->set_userdata($sesdata);
			//Login untuk Author
			if ($role === 'author') {
				redirect(base_url('home'));

				//Login untuk Admin
			} elseif ($role === 'admin') {
				redirect(base_url('home'));

			} elseif ($role ==='user'){

				//Login uuntuk User
				redirect(base_url('welcome'));
			}
		} else {
			echo $this->session->set_flashdata('msg', 'Username or Password s Wrong!');
			redirect('login');
		}
	}

	function forgot_pw()
	{
		$this->load->view('auth/forgot-password.php');
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
