<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin_model extends CI_Model
{

    // DASBOARD
    public function hitung_artikel()
    {
        return $this->db->count_all('artikel');
    }

    public function hitung_berita()
    {
        return $this->db->count_all('berita');
    }

    public function hitung_kalender()
    {
        return $this->db->count_all('kalender');
    }

    public function hitung_diskusi()
    {
        return $this->db->count_all('diskusi');
    }

    public function hitung_donasi()
    {
        return $this->db->count_all('donasi');
    }

    public function hitung_alluser()
    {
        return $this->db->count_all('user');
    }

    public function hitung_topik()
    {
        return $this->db->count_all('topik');
    }

    public function hitung_admin()
    {
        return $this->db->get_where('user', array('level' => '1'))->num_rows();
    }

    public function hitung_user()
    {
        return $this->db->get_where('user', array('level' => '2'))->num_rows();
    }

    // ARTIKEL
    public function getAllartikel()
    {
        $query = $this->db->get('artikel');
        return $query->result_array();
    }

    public function getArtikelById($id)
    {
        $query = $this->db->get_where('artikel', array('id_artikel' => $id));
        return $query->row_array();
    }

    public function tambah_artikel()
    {
        $this->id_artikel = uniqid();
        $data = [
            "judul" => $this->input->post('judul', true),
            "gambar" => $this->uploadImage(),
            "tanggal" => $this->input->post('tanggal', true),
            "konten" => $this->input->post('konten', true),
        ];
        $this->db->insert('artikel', $data);
    }

    public function uploadImage()
    {
        $config['upload_path'] = './upload/artikel/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->id_artikel;
        $config['overwrite'] = true;
        // $config['max_size'] = 1024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('gambar')) {
            return $this->upload->data("file_name");
        }
    }

    public function edit_artikel()
    {
        $post = $this->input->post();
        $this->id_artikel = $post["id_artikel"];
        $this->judul = $post["judul"];
        $this->tanggal = $post["tanggal"];
        $this->gambar = $this->uploadimage();
        $this->konten = $post["konten"];

        $this->db->update('artikel', $this, array('id_artikel' => $post['id_artikel']));
    }

    public function hapus_artikel($id)
    {
        return $this->db->delete('artikel', array("id_artikel" => $id));
    }

    // BERITA
    public function getAllBerita()
    {
        $query = $this->db->get('berita');
        return $query->result_array();
    }

    public function getBeritaById($id)
    {
        $query = $this->db->get_where('berita', array('id_berita' => $id));
        return $query->row_array();
    }

    public function tambah_berita()
    {
        $this->id_berita = uniqid();
        $data = [
            "judul" => $this->input->post('judul', true),
            "foto" => $this->uploadImage1(),
            "tanggal" => $this->input->post('tanggal', true),
            "konten" => $this->input->post('konten', true),
        ];
        $this->db->insert('berita', $data);
    }

    public function uploadImage1()
    {
        $config['upload_path'] = './upload/berita/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->id_berita;
        $config['overwrite'] = true;
        // $config['max_size'] = 1024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto')) {
            return $this->upload->data("file_name");
        }
    }

    public function edit_berita()
    {
        $post = $this->input->post();
        $this->id_berita = $post["id_berita"];
        $this->judul = $post["judul"];
        $this->tanggal = $post["tanggal"];
        $this->foto = $this->uploadimage1();
        $this->konten = $post["konten"];

        $this->db->update('berita', $this, array('id_berita' => $post['id_berita']));
    }

    public function hapus_berita($id)
    {
        return $this->db->delete('berita', array("id_berita" => $id));
    }

    // TOPIK DISKUSI
    public function getAllTopik()
    {
        $query = $this->db->get('topik');
        return $query->result_array();
    }

    public function getTopikById($id)
    {
        $query = $this->db->get_where('topik', array('id_topik' => $id));
        return $query->row_array();
    }

    public function tambah_topik()
    {
        $this->id_topik = uniqid();
        $data = [
            "topik" => $this->input->post('topik', true),
            "tanggal" => $this->input->post('tanggal', true),
        ];
        $this->db->insert('topik', $data);
    }

    public function edit_topik()
    {
        $post = $this->input->post();
        $this->id_topik = $post["id_topik"];
        $this->topik = $post["topik"];
        $this->tanggal = $post["tanggal"];

        $this->db->update('topik', $this, array('id_topik' => $post['id_topik']));
    }

    public function hapus_topik($id)
    {
        return $this->db->delete('topik', array("id_topik" => $id));
    }

    //DONASI
    public function getAllDonasi()
    {
        $query = $this->db->get('donasi');
        return $query->result_array();
    }

    //KALENDER
    public function getAllKalender()
    {
        $query = $this->db->get('kalender');
        return $query->result_array();
    }

    public function hapus_kalender($id)
    {
        return $this->db->delete('kalender', array("id_kalender" => $id));
    }

    //DETAIL DISKUSI
    public function getAllDetailDiskusi()
    {
        $query = $this->db->get('diskusi');
        return $query->result_array();
    }
}
