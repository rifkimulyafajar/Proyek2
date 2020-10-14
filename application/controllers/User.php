<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		

		$this->load->view('user/header', $data);
		$this->load->view('user/berita');
		$this->load->view('user/footer');
	}

	public function artikel()
	{
		# code...
		$data['title'] = "Artikel";
		

		$this->load->view('user/header', $data);
		$this->load->view('user/artikel');
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
}
