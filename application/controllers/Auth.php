<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function index()
	{
		if ($this->session->userdata('kode_regpegawai')) {
			redirect('member');
		}

		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == false) {
			$this->load->view('pages/header_auth');
			$this->load->view('auth/login');
			$this->load->view('pages/footer_auth');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('reg_pegawai', ['kode_regpegawai' => $username])->row_array();

		if ($user) {
			if (password_verify($password, $user['password_regpegawai'])) {
				$data = [
					'id_regpegawai' => $user['id_regpegawai'],
					'kode_regpegawai' => $user['kode_regpegawai']
				];
				$this->session->set_userdata($data);
				redirect('pegawai');
			} else {
				$this->session->set_flashdata('message', '<div class="alert-danger">Password salah!</div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert-danger">Username tidak ditemukan!</div>');
			redirect('auth');
		}
	}

	public function logOut()
	{
		$this->session->unset_userdata('id_regpegawai');
		$this->session->unset_userdata('kode_regpegawai');
		redirect('auth');
	}
}
