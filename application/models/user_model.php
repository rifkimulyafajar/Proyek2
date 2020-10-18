<?php

defined('BASEPATH') or exit('No direct script access allowed');

class user_model extends CI_Model
{
    public function getAllBerita()
    {
        $query = $this->db->get('berita');
        return $query->result_array();
    }

    public function getAllartikel()
    {
        $query = $this->db->get('artikel');
        return $query->result_array();
    }
}
