<?php

    class Register_model extends CI_Model {

        function insert($data)
        {
            $this->db->insert('user', $data);
            return $this->db->insert_id();
        }

        public function cek_verifikasi($table, $where){
            return $this->db->get_where($table, $where);
        }
    }