<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

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
	 * 
	 */

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('aktor') != 'Biro Keamanan') {
			redirect('auth');
		}
		$this->load->model('M_laporan', "m_laporan");	
	}

	public function index()
	{

		$data['laporan'] = $this->m_laporan->get_all('laporan');
		$data['content'] = 'keamanan/laporan_kehilangan';
		$this->load->view('keamanan/layout/wrapper', $data);
	}

	public function update($id_laporan)
	{
		$where = array('id_laporan' => $id_laporan, );
		$data['laporan'] =  $this->m_laporan->detail($where, "laporan");
		$data['content'] = 'keamanan/form_laporan_kehilangan';
		$this->load->view('keamanan/layout/wrapper', $data);
	}

	public function submit($id_laporan)
	{
		$where = array('id_laporan' => $id_laporan, );

		$namafile = $_FILES["berkas"]["name"];
		$berkas_path = str_replace(" ", "_", $namafile);
		$t = date('ymdHis');
		$berkas_path = $t . "_" . $berkas_path;
		$config["file_name"] = $berkas_path;
		$config["upload_path"] = "berkas/";
		$config["allowed_types"] = "jpg|jpeg|gif|png";
		$config['max_size'] = 20000;

		var_dump($config);

		$this->load->library("upload", $config);

		if ($this->upload->do_upload("berkas")) {
			$data = array(
				'solusi' => $this->input->post('solusi'),
				'status' => "Sudah Ditindak Lanjut",
				'bukti_solusi' => $berkas_path,
			);
			if ($this->m_laporan->update($where, $data, 'laporan')) {
				// $this->session->set_flashdata('msg', '<div id="toast-container" class="toast-top-right"><div class="toast toast-success" aria-live="polite" style="opacity: 0.744935;"><div class="toast-message">Berhasil membuat postingan baru</div></div></div>');
			} else {
				// $this->session->set_flashdata('msg', '<div id="toast-container" class="toast-top-right"><div class="toast toast-error" aria-live="polite" style="opacity: 0.744935;"><div class="toast-message">Gagal menambahkan postingan</div></div></div>');
			}
		}

		redirect('keamanan/laporan');
	}

	public function download_berkas($id_laporan)
	{
		$where = array('id_laporan' => $id_laporan, );
		$laporan = $this->m_laporan->detail($where, 'laporan');
		$file = $laporan[0]->berkas_pendukung;
		$path = 'berkas/'.$file;
		echo $path;
		force_download($path , NULL);
	}
}
