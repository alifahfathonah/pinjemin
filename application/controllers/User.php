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
	public function __construct(){
		parent::__construct();
        
        $this->load->library('image_lib');
        $this->load->library('upload');
    }

	public function index()
	{
		$data = array(
			'page' => 'user_dashboard',
			'link' => 'user_dashboard',

		);
		$this->load->view('template/wrapper', $data);
	}

	public function profil(){
		$nik = $this->session->userdata('username');
		$query = $this->db->get_where('tb_customer', array('nik' => $this->session->userdata('username')));

		$query_file = $this->db->query("select * from tb_file where id_customer = '$nik'");
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

	public function tambah_file(){

		$tipe_file = $this->input->post('jenis', true);
		$nik = $this->session->userdata('username');
        $config ['upload_path'] = './assets/file_upload/';
        $config ['allowed_types'] = 'jpg|jpeg|png|PNG|JPG|JPEG';
        $config ['max_size'] = '3000';
        $config ['file_name'] = $nik.'_'.$tipe_file.'_'.date("YmdHis");
        $this->upload->initialize($config);

        $cek = $this->db->query("select * from tb_file where id_customer = '$nik' and type_file = '$tipe_file'");
        if($cek->num_rows() != 0){
        	$msg = array('status' => 'failed', 'textnya' => '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>Anda sudah mengupload '.$tipe_file.'</div>' );
            echo json_encode($msg);
            exit();
        }

        if(!$this->upload->do_upload('nama_file')){
            $msg = array('status' => 'failed', 'textnya' => '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>'.$this->upload->display_errors().'</div>' );
            echo json_encode($msg);
            exit();
        }else{
        	$this->upload->do_upload('nama_file');
	        $upload_data = $this->upload->data();

	        $data = array(
	            'nama_file' => $upload_data['file_name'],
	            'type_file' => $tipe_file,
	            'tgl_upload' => date('Y-m-d'),
	            'id_customer' => $nik 
	        );
	        $simpan = $this->db->insert("tb_file", $data);
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

        
	}
}