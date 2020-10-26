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

    // ====================== ARTIKEL ==================================================
}
