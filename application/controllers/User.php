<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = "Home";
		

		$this->load->view('user/header', $data);
		$this->load->view('user/index');
		$this->load->view('user/footer');
	}

	public function berita()
	{
		# code...
		$data['title'] = "Berita";
		$data['berita'] = $this->user_model->getAllBerita();

		$this->load->view('user/header', $data);
		$this->load->view('user/berita', $data);
		$this->load->view('user/footer');
	}

	public function artikel()
	{
		# code...
		$data['title'] = "Artikel";
		$data['artikel'] = $this->user_model->getAllArtikel();

		$this->load->view('user/header', $data);
		$this->load->view('user/artikel', $data);
		$this->load->view('user/footer');
	}

	public function donasi()
	{
		# code...
		$data['title'] = "Donasi";
		

		$this->load->view('user/header', $data);
		$this->load->view('user/donasi');
		$this->load->view('user/footer');
	}

	public function kalendar()
	{
		# code...
		$data['title'] = "Kalendar Kesuburan";
		

		$this->load->view('user/header', $data);
		$this->load->view('user/kalendar');
		$this->load->view('user/footer');
	}

	public function diskusi()
	{
		# code...
		$data['title'] = "Diskusi";
		

		$this->load->view('user/header', $data);
		$this->load->view('user/diskusi');
		$this->load->view('user/footer');
	}

	public function detail_diskusi()
	{
		# code...
		$data['title'] = "Detail Diskusi";


		$this->load->view('user/header', $data);
		$this->load->view('user/detail_diskusi');
		$this->load->view('user/footer');
	}
}
