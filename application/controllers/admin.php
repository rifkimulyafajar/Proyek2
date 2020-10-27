<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Dashboard';
			$data['artikel'] = $this->admin_model->hitung_artikel();
			$data['berita'] = $this->admin_model->hitung_berita();
			$data['alluser'] = $this->admin_model->hitung_alluser();
			$data['admin'] = $this->admin_model->hitung_admin();
			$data['user'] = $this->admin_model->hitung_user();
			$data['topik'] = $this->admin_model->hitung_topik();
			$data['kalender'] = $this->admin_model->hitung_kalender();
			$data['donasi'] = $this->admin_model->hitung_donasi();

			$this->load->view('template/headeradmin', $data);
			$this->load->view('admin/index', $data);
			$this->load->view('template/footeradmin');

		}
		else {
			redirect('login/index');
		}

	}

	// ARTIKEL
	public function data_artikel()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Data Artikel';
			$data['artikel'] = $this->admin_model->getAllArtikel();

			$this->load->view('template/headeradmin', $data);
			$this->load->view('admin/data_artikel', $data);
			$this->load->view('template/footeradmin');

		}
		else {
			redirect('login/index');
		}
	}

	public function tambah_artikel()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Tambah Data Artikel';

			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('Tanggal', 'Tanggal', 'required');
			// $this->form_validation->set_rules('gambar', 'Gambar', 'required');
			$this->form_validation->set_rules('konten', 'Konten', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/headeradmin', $data);
				$this->load->view('admin/tambah_artikel', $data);
				$this->load->view('template/footeradmin');
			} else {
				$this->admin_model->tambah_artikel();
				echo "<script>alert('Anda berhasil menambah data');</script>";
				redirect('admin/data_artikel', 'refresh');
			}

		}
		else {
			redirect('login/index');
		}
	}

	public function edit_artikel($id)
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Edit Artikel';
			$data['artikel'] = $this->admin_model->getArtikelById($id);

			$this->form_validation->set_rules('judul', 'Judul', 'required');
			// $this->form_validation->set_rules('gambar', 'Gambar', 'required');
			$this->form_validation->set_rules('konten', 'Konten', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/headeradmin', $data);
				$this->load->view('admin/edit_artikel', $data);
				$this->load->view('template/footeradmin');
			} else {
				$this->admin_model->edit_artikel();
				echo "<script>alert('Anda berhasil mengedit data');</script>";
				redirect('admin/data_artikel', 'refresh');
			}

		}
		else {
			redirect('login/index');
		}
	}

	public function hapus_artikel($id)
	{
		if (isset($_SESSION['user'])) {

			if ($this->admin_model->hapus_artikel($id)) {
				$this->session->set_flashdata('hapus_artikel', true);
			} else {
				$this->session->set_flashdata('hapus_artikel', false);
			}
			redirect('admin/data_artikel', 'refresh');

		}
		else {
			redirect('login/index');
		}
	}

	// BERITA
	public function data_berita()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Data Berita';
			$data['berita'] = $this->admin_model->getAllBerita();

			$this->load->view('template/headeradmin', $data);
			$this->load->view('admin/data_berita', $data);
			$this->load->view('template/footeradmin');

		}
		else {
			redirect('login/index');
		}
	}

	public function tambah_berita()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Tambah Data Berita';

			$this->form_validation->set_rules('judul', 'Judul', 'required');
			$this->form_validation->set_rules('Tanggal', 'Tanggal', 'required');
			// $this->form_validation->set_rules('gambar', 'Gambar', 'required');
			$this->form_validation->set_rules('konten', 'Konten', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/headeradmin', $data);
				$this->load->view('admin/tambah_berita', $data);
				$this->load->view('template/footeradmin');
			} else {
				$this->admin_model->tambah_berita();
				echo "<script>alert('Anda berhasil menambah data');</script>";
				redirect('admin/data_berita', 'refresh');
			}

		}
		else {
			redirect('login/index');
		}
	}

	public function edit_berita($id)
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Edit Berita';
			$data['berita'] = $this->admin_model->getBeritaById($id);

			$this->form_validation->set_rules('judul', 'Judul', 'required');
			// $this->form_validation->set_rules('gambar', 'Gambar', 'required');
			$this->form_validation->set_rules('konten', 'Konten', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/headeradmin', $data);
				$this->load->view('admin/edit_berita', $data);
				$this->load->view('template/footeradmin');
			} else {
				$this->admin_model->edit_berita();
				echo "<script>alert('Anda berhasil mengedit data');</script>";
				// die();
				redirect('admin/data_berita', 'refresh');
			}

		}
		else {
			redirect('login/index');
		}
	}

	public function hapus_berita($id)
	{
		if (isset($_SESSION['user'])) {

			if ($this->admin_model->hapus_berita($id)) {
				$this->session->set_flashdata('hapus_berita', true);
			} else {
				$this->session->set_flashdata('hapus_berita', false);
			}
			redirect('admin/data_berita', 'refresh');

		}
		else {
			redirect('login/index');
		}
	}

	// TOPIK DISKUSI
	public function data_topik()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Data Topik Diskusi';
			$data['topik'] = $this->admin_model->getAllTopik();

			$this->load->view('template/headeradmin', $data);
			$this->load->view('admin/data_topik', $data);
			$this->load->view('template/footeradmin');

		}
		else {
			redirect('login/index');
		}
	}

	public function tambah_topik()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Tambah Data Topik Diskusi';

			$this->form_validation->set_rules('topik', 'Topik', 'required');
			$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/headeradmin', $data);
				$this->load->view('admin/tambah_topik', $data);
				$this->load->view('template/footeradmin');
			} else {
				$this->admin_model->tambah_topik();
				echo "<script>alert('Anda berhasil menambah data');</script>";
				redirect('admin/data_topik', 'refresh');
			}

		}
		else {
			redirect('login/index');
		}
	}

	public function edit_topik($id)
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Edit Topik Diskusi';
			$data['topik'] = $this->admin_model->getTopikById($id);

			$this->form_validation->set_rules('topik', 'Topik', 'required');
			$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('template/headeradmin', $data);
				$this->load->view('admin/edit_topik', $data);
				$this->load->view('template/footeradmin');
			} else {
				$this->admin_model->edit_topik();
				echo "<script>alert('Anda berhasil mengedit data');</script>";
				redirect('admin/data_topik', 'refresh');
			}

		}
		else {
			redirect('login/index');
		}
	}

	public function hapus_topik($id)
	{
		if (isset($_SESSION['user'])) {

			if ($this->admin_model->hapus_topik($id)) {
				$this->session->set_flashdata('hapus_topik', true);
			} else {
				$this->session->set_flashdata('hapus_topik', false);
			}
			redirect('admin/data_topik', 'refresh');

		}
		else {
			redirect('login/index');
		}
	}

	//DONASI
	public function data_donasi()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Data Donasi';
			$data['donasi'] = $this->admin_model->getAllDonasi();

			$this->load->view('template/headeradmin', $data);
			$this->load->view('admin/data_donasi', $data);
			$this->load->view('template/footeradmin');

		}
		else {
			redirect('login/index');
		}
	}

	//KALENDER
	public function data_kalender()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Data Kalender';
			$data['kalender'] = $this->admin_model->getAllKalender();

			$this->load->view('template/headeradmin', $data);
			$this->load->view('admin/data_kalender', $data);
			$this->load->view('template/footeradmin');

		}
		else {
			redirect('login/index');
		}
	}

	public function hapus_kalender($id)
	{
		if (isset($_SESSION['user'])) {

			$this->admin_model->hapus_kalender($id);
			echo "<script>alert('Anda berhasil menghapus data');</script>";
			redirect('admin/data_kalender', 'refresh');

		}
		else {
			redirect('login/index');
		}
	}

	//DETAIL DISKUSI
	public function data_detailDiskusi()
	{
		if (isset($_SESSION['user'])) {

			$data['title'] = 'Data Detail Diskusi';
			$data['diskusi'] = $this->admin_model->getAllDetailDiskusi();

			$this->load->view('template/headeradmin', $data);
			$this->load->view('admin/data_detailDiskusi', $data);
			$this->load->view('template/footeradmin');

		}
		else {
			redirect('login/index');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		echo "<script>alert('Anda berhasil Logout');</script>";
		redirect('login/index', 'refresh');
	}
}
