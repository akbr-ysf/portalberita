<?php

class Home_model extends CI_Model {
    public function getAllBerita()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('berita')->result_array();
    }

    public function cariBerita()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('judul', $keyword);
        $this->db->or_like('tanggal', $keyword);

        return $this->db->get('berita')->result_array();
    }

    public function getBeritaById($id)
    {
        return $this->db->get_where('berita', ['id' => $id])->row_array();
    }
}