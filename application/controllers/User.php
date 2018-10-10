<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data = array(
			'page' => 'user_dashboard',
			'link' => 'user_dashboard',

		);
		$this->load->view('template/wrapper', $data);
	}

	public function profil(){
		$query = $this->db->get_where('tb_customer', array('nik' => $this->session->userdata('username')));
		$query_file = $this->db->get_where('tb_file', array('id_customer' => $query->row()->id_customer));
		$data = array(
			'page' => 'user_profil',
			'link' => 'user_profil',
			'data' => $query,
			'data_file' => $query_file,
			'script' => 'script/user_script'
		);
		$this->load->view('template/wrapper', $data);
	}

	public function ajukan_pinjaman(){
		$query = $this->db->get_where('tb_customer', array('nik' => $this->session->userdata('username')));
		$query_file = $this->db->get_where('tb_pinjaman', array('id_customer' => $query->row()->id_customer));
		$data = array(
			'page' => 'user_pengajuan',
			'link' => 'user_ajukan_pinjaman',
			'data' => $query,
			'data_file' => $query_file,
			'script' => 'script/user_script'
		);
		$this->load->view('template/wrapper', $data);
	}
}