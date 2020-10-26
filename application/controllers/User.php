<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('user_model');
	}

	public function index()
	{
		$data['title'] = "Home";

		$this->load->view('user/header', $data);
		$this->load->view('user/index', $data);
		$this->load->view('user/footer');
	}

	// =========================================================================

	public function berita()
	{
		# code...
		$data['title'] = "Berita";
		$data['berita'] = $this->user_model->getAllBerita();

		$this->load->view('user/header', $data);
		$this->load->view('user/berita', $data);
		$this->load->view('user/footer');
	}

	public function detail_berita($id)
	{
		# code...
		$data['title'] = "Detail";
		$data['berita'] = $this->user_model->getBeritaById($id);

		$this->load->view('user/header', $data);
		$this->load->view('user/detail_berita');
		$this->load->view('user/footer');
	}

	// =========================================================================

	public function artikel()
	{
		# code...
		$data['title'] = "Artikel";
		$data['artikel'] = $this->user_model->getAllArtikel();

		$this->load->view('user/header', $data);
		$this->load->view('user/artikel', $data);
		$this->load->view('user/footer');
	}

	public function detail_artikel($id)
	{
		# code...
		$data['title'] = "Detail";
		$data['artikel'] = $this->user_model->getArtikelById($id);

		$this->load->view('user/header', $data);
		$this->load->view('user/detail_artikel', $data);
		$this->load->view('user/footer');
	}

	// =========================================================================

	public function donasi()
	{
		# code...
		$data['title'] = "Donasi";
		

		$this->load->view('user/header', $data);
		$this->load->view('user/donasi');
		$this->load->view('user/footer');
	}

	// =========================================================================

	public function kalendar()
	{
		# code...
		$data['title'] = "Kalendar Kesuburan";
		

		$this->load->view('user/header', $data);
		$this->load->view('user/kalendar');
		$this->load->view('user/footer');
	}

	// =========================================================================

	public function diskusi()
	{
		# code...
		$data['title'] = "Diskusi";
		$data['topik'] = $this->admin_model->getAllTopik();
		$data['diskusi'] = $this->admin_model->hitung_diskusi();

		$this->load->view('user/header', $data);
		$this->load->view('user/diskusi', $data);
		$this->load->view('user/footer');
	}

	public function detail_diskusi($id)
	{
		# code...
		$data['title'] = "Detail Diskusi";
		$data['diskusi'] = $this->admin_model->hitung_diskusi();
		$data['topik'] = $this->admin_model->getTopikById($id);

		$this->load->view('user/header', $data);
		$this->load->view('user/detail_diskusi', $data);
		$this->load->view('user/footer');
	}

	public function tambah_topik()
	{
		$data['title'] = "Diskusi";
		$data['topik'] = $this->admin_model->getAllTopik();
		$data['diskusi'] = $this->admin_model->hitung_diskusi();
		
		$this->form_validation->set_rules('topik', 'Topik', 'required');
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('user/header', $data);
			$this->load->view('user/diskusi', $data);
			$this->load->view('user/footer');
		} else {
			$this->admin_model->tambah_topik();
			echo "<script>alert('Success');</script>";
			redirect('user/diskusi', 'refresh');
		}
	}

	// =========================================================================

	public function logout()
	{
		# code...
		$this->session->sess_destroy();
		echo "<script>alert('Anda berhasil Logout');</script>";
		redirect('', 'refresh');
	}
}
