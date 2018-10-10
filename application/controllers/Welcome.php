<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->load->view('welcome_message');
	}
	
	public function login()
	{
		$this->load->view('login');
	}

	public function daftar(){
		$data = array(
			'nik' => $this->input->post('nik', true),
			'nama_customer' => $this->input->post('nama', true),
			'tempat_lahir' => $this->input->post('tempat_lahir', true),
			'tgl_lahir' => $this->input->post('tanggal_lahir', true),
			'jenis_kelamin' => $this->input->post('jk', true),
			'no_hp' => $this->input->post('nomor_hp', true),
			'alamat' => $this->input->post('alamat', true),
			'email' => $this->input->post('email', true),
		);
		$data_user = array(
			'username' => $this->input->post('nik', true),
			'password' => password_hash($this->input->post('tanggal_lahir', true), PASSWORD_DEFAULT),
			'level' => 'customer'
		);

		
		$this->db->trans_begin();

		$simpan = $this->db->insert('tb_customer', $data);
		$simpan_user = $this->db->insert('tb_user', $data_user);

		if ($this->db->trans_status() === FALSE)
		{
	        $this->db->trans_rollback();
	        echo 'Terjadi kesalahan, data gagal disimpan...<br/><a href="'.base_url().'">Kembali ke halaman utama</a>';
		}else{
	        $this->db->trans_commit();
	        echo 'Sukses, data Berhasil disimpan...<br/><a href="'.base_url().'welcome/login">Silahkan login disini dengan username NIK anda, dan password tanggal lahir anda</a>';
		}
	}

	public function proses_login(){
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$cek = $this->db->get_where('tb_user', array('username' => $username));
		if($cek->num_rows() == 0){
			echo '<script>alert("username tidak ditemukan");window.location = "'.base_url().'";</script>';
		}else{
			$password_di_db =  $cek->row()->password;
			if(password_verify($password, $password_di_db)){
				$ses = array(
					'is_login' => true,
					'username' => $username,
					'level' => $cek->row()->level
				);
				$this->session->set_userdata($ses);
				if($cek->row()->level == 'admin'){
					echo '<script>alert("User ditemukan");window.location = "'.base_url().'admin";</script>';
				}else{
					echo '<script>alert("User ditemukan");window.location.href="'.base_url().'user";</script>';
				}
			}else{
				echo '<script>alert("Password salah");window.location = "'.base_url().'";</script>';
			}
		}
	}
	public function logout(){
		session_destroy();
		echo '<script>alert("Berhasil keluar");window.location = "'.base_url().'";</script>';
	}
}
