<?php

defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_Model
{
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

    // ====================== BERITA ===================================================

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

    public function getKategori($kategori)
    {
        # code...
        $query = $this->db->get_where('artikel', array('id_kategori' => $kategori));
        return $query->result_array();
    }

    // ====================== ARTIKEL ==================================================

    public function getAllTanggapan($id)
    {
        # code...
        $query = $this->db->get_where('diskusi', array('id_topik' => $id));
        return $query->result_array();
    }

    public function tambah_tanggapan($id)
    {
        # code...
        $this->id_diskusi = uniqid();

        $data = [
            "id_topik" => $this->input->post('id_topik', true),
            "nama" => $this->input->post('nama', true),
            "pembahasan" => $this->input->post('pembahasan', true),
            "tanggal" => $this->input->post('tanggal', true)
        ];

        $this->db->insert('diskusi', $data);
    }

    // ====================== DONASI ==================================================

    public function getAllDonasi()
    {
        # code...
        $query = $this->db->get('tujuan_donasi');
        return $query->result_array();
    }

    public function getDonasiById($id)
    {
        $query = $this->db->get_where('tujuan_donasi', array('id_tujuan' => $id));
        return $query->row_array();
    }

    public function tambah_donasi($id)
    {
        # code...
        $this->id_donasi = uniqid();

        $data = [
            "id_user" => $this->input->post('id_user', true),
            "id_tujuan" => $this->input->post('id_donasi', true),
            "nama_lengkap" => $this->input->post('name', true),
            "no_hp" => $this->input->post('notelp', true),
            "email" => $this->input->post('email', true),
            "jmlh_donasi" => $this->input->post('jumlah', true),
            "bukti_tf" => $this->uploadBuktiTF(),
            "note" => $this->input->post('note', true),
            "tgl_donasi" => $this->input->post('tanggal', true)
        ];

        $this->db->insert('donasi', $data);
    }

    public function uploadBuktiTF()
    {
        $config['upload_path'] = './upload/buktitf/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['file_name'] = $this->id_donasi;
        $config['overwrite'] = true;
        // $config['max_size'] = 1024;

        $this->upload->initialize($config);
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('bukti_tf')) {
            return $this->upload->data("file_name");
        }
    }
}
