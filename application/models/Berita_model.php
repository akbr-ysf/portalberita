<?php

class Berita_model extends CI_Model {
    
    public function getAllBerita()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('berita')->result_array();
    }

    public function tambahBerita()
    {
        $data = [
            "judul" => $this->input->post('judul', true),
            "tanggal" => $this->input->post('tanggal', true),
            "isi" => $this->input->post('isi', true)
        ];

        $this->db->insert('berita', $data);
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

    public function hapusBerita($id)
    {
        $this->db->delete('berita', ['id' => $id]);
    }

    public function editBerita()
    {
        $data = [
            "judul" => $this->input->post('judul', true),
            "tanggal" => $this->input->post('tanggal', true),
            "isi" => $this->input->post('isi', true)
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('berita', $data);
    }
}