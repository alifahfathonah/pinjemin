<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
        
        $this->load->library('image_lib');
        $this->load->library('upload');
    }

	public function index()
	{
		$data = array(
			'page' => 'admin_dashboard',
			'link' => 'admin_dashboard',

		);
		$this->load->view('template/wrapper', $data);
	}

	public function list_user(){
		$data = $this->db->get('tb_customer');
		$data = array(
			'page' => 'admin_list_user',
			'link' => 'admin_list_user',
			'data' => $data
		);
		$this->load->view('template/wrapper', $data);
	}

	public function detail_customer($id_customer){
		$get = $this->db->get_where('tb_customer', array('id_customer' => $id_customer));
		$nik = $get->row()->nik;
		$query = $this->db->get_where('tb_customer', array('nik' => $nik));

		$query_file = $this->db->query("select * from tb_file where id_customer = '$nik'");
		$data = array(
			'page' => 'admin_detail_customer',
			'link' => 'admin_list_user',
			'data' => $query,
			'data_file' => $query_file,
			'script' => 'script/admin_script'
		);
		$this->load->view('template/wrapper', $data);
	}

	public function verifikasi_file(){
		$data = array(
			'verifikator' => $this->session->userdata('username') ,
			'status_verifikasi' => $this->input->post('verifikasi', true),
			'catatan_verifikasi' => $this->input->post('catatan_file', true),
			'tgl_verifikasi' => date('Y-m-d'),			
		);
		$this->db->where(
			array('id_file' => $this->input->post('id_file', true))
		);
		$simpan = $this->db->update("tb_file", $data);
        if($simpan){
        	$msg = array('status' => 'success', 'textnya' => '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>Data berhasil disimpan</div>' );
            echo json_encode($msg);
            exit();
        }else{
        	$msg = array('status' => 'failed', 'textnya' => '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>Data gagal disimpan</div>' );
            echo json_encode($msg);
            exit();
        }
	}

	public function ajuan_peminjaman($id_customer){
		$get = $this->db->get_where('tb_customer', array('id_customer' => $id_customer));
		$nik = $get->row()->nik;
		$get_pinjaman = $this->db->get_where('tb_pinjaman', array('id_customer' => $nik));
		$data = array(
			'page' => 'admin_ajuan_peminjaman_customer',
			'link' => 'admin_list_user',
			'data' => $get,
			'data_pinjaman' => $get_pinjaman,
			'script' => 'script/admin_script'
		);
		$this->load->view('template/wrapper', $data);
	}

	public function verifikasi_pengajuan(){
		$data = array(
			'jml_acc' => $this->input->post('jml_acc', true),
			'catatan' =>  $this->input->post('catatan_file', true),
			'status_pinjaman' =>  $this->input->post('verifikasi', true),
			'bunga' =>  $this->input->post('bunga', true),
			'tgl_verifikasi' =>  date('Y-m-d'),
			'verifikator' => $this->session->userdata('username')
		);

		$this->db->where(
			array('id_pinjaman' => $this->input->post('id_pinjaman', true))
		);
		$simpan = $this->db->update("tb_pinjaman", $data);
        if($simpan){
        	$msg = array('status' => 'success', 'textnya' => '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>Data berhasil disimpan</div>' );
            echo json_encode($msg);
            exit();
        }else{
        	$msg = array('status' => 'failed', 'textnya' => '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>Data gagal disimpan</div>' );
            echo json_encode($msg);
            exit();
        }
	}

	public function angsuran_verifikasi($id_pinjaman, $nik){
		$get = $this->db->get_where('tb_customer', array('nik' => $nik));
		$nik = $get->row()->nik;
		$get_pinjaman = $this->db->get_where('tb_pinjaman', array('id_pinjaman' => $id_pinjaman));
		$get_angsuran = $this->db->get_where('tb_angsuran', array('id_pinjaman' => $id_pinjaman));
		$data = array(
			'page' => 'admin_angsuran_customer',
			'link' => 'admin_list_user',
			'data' => $get,
			'pinjaman' => $get_pinjaman,
			'angsuran' => $get_angsuran,
			'id_pinjaman' => $id_pinjaman,
			'nik' => $nik,
			'script' => 'script/admin_script'
		);
		$this->load->view('template/wrapper', $data);
	}

	public function simpan_bayar_angsuran(){
		$data = array(
			'angsuran_ke' => $this->input->post('angsuran_ke', true),
			'denda' =>  $this->input->post('denda', true),
			'nominal_angsuran' =>  $this->input->post('nominal_angsuran', true),
			'tgl_angsuran' =>  date('Y-m-d'),
			'petugas' =>  $this->session->userdata('username'),
			'id_pinjaman' => $this->input->post('id_pinjaman', true),
		);

		
		$simpan = $this->db->insert("tb_angsuran", $data);
        if($simpan){
        	$msg = array('status' => 'success', 'textnya' => '<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>Data berhasil disimpan</div>' );
            echo json_encode($msg);
            exit();
        }else{
        	$msg = array('status' => 'failed', 'textnya' => '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>Data gagal disimpan</div>' );
            echo json_encode($msg);
            exit();
        }
	}

	public function cetak_angsuran($id_angsuran){
		$query = $this->db->query("SELECT * FROM tb_angsuran LEFT JOIN tb_pinjaman ON tb_pinjaman.`id_pinjaman` = tb_angsuran.`id_pinjaman` LEFT JOIN tb_customer ON tb_customer.nik = tb_pinjaman.`id_customer` WHERE tb_angsuran.`id_angsuran` = '$id_angsuran'");
		$data = array(
			'data' => $query,
			'id_angsuran'=> $id_angsuran
		);
		$this->load->view('cetak_angsuran', $data);

	}
}