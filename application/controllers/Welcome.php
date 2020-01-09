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

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['siswa']	= $this->db->get('siswa')->result();
		$this->load->view('welcome_message',$data);
	}

	public function simpan()
	{
		$post 	= $this->input->post();
		$data	= [
					'nis'				=> $post['nis'],
					'nama'				=> $post['nama'],
					'tgl_masuk'			=> $post['tanggal_masuk'],
					'jenis_kelamin'		=> $post['jenis_kelamin'],
					'tempat_lahir'		=> $post['tempat_lahir'],
					'tgl_lahir'			=> $post['tanggal_lahir'],
					'alamat'			=> $post['alamat'],
					'nik_ayah'			=> $post['nik_ayah'],
					'nama_ayah'			=> $post['nama_ayah'],
					'tempat_lahir_ayah'	=> $post['tempat_lahir_ayah'],
					'tgl_lahir_ayah'	=> $post['tanggal_lahir_ayah'],
					'pekerjaan_ayah'	=> $post['pekerjaan_ayah'],
					'nik_ibu'			=> $post['nik_ibu'],
					'nama_ibu'			=> $post['nama_ibu'],
					'tempat_lahir_ibu'	=> $post['tempat_lahir_ibu'],
					'tgl_lahir_ibu'		=> $post['tanggal_lahir_ibu'],
					'pekerjaan_ibu'		=> $post['pekerjaan_ibu'],
					'status'			=> $post['status']
				  ];
		$this->db->insert('siswa',$data);
		redirect('welcome','refresh');
	}
}
