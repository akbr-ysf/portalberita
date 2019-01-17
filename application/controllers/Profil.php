<?php

    class Profil extends CI_Controller {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('Profil_model');
            $this->load->library('form_validation');

            if( $this->session->userdata('email'))
            {

            } else {
                redirect(base_url('login/index'));
            }
        }

        public function index()
        {
            $data['judul'] = 'Profil';
            $data['get_all_userdata'] = $this->Profil_model->get_by_id($this->session->userdata('email'));
            
            $this->load->view('templates/header', $data);
            $this->load->view('layout/template', 'authentication/profile', $data);
            $this->load->view('templates/footer');
        }

        public function updateProfile()
        {
            $this->form_validation->set_rules('email', 'Email', 'trim|required|min_length[8]|max_length[50]');
            $this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[2]|max_length[15]');
            $this->form_validation->set_rules('namaLengkap', 'Nama Lengkap', 'trim|required|min_length[2]|max_length[15]');
            $this->form_validation->set_rules('alamat', 'alamat', 'trim|required|min_length[8]|max_length[50]');
            $this->form_validation->set_rules('phone', 'Telp', 'trim|required|min_length[11]|max_length[12]');

            $email = $this->session->userdata('email');
            $data = array(
                'email' => $this->input->post('email'),
                'nama' => $this->input->post('nama'),
                'namaLengkap' => $this->input->post('namaLengkap'),
                'alamat' => $this->input->post('alamat'),
                'phone' => $this->input->post('phone'),
            );
            if ($this->form_validation->run() == true) {
                //delete file
                $user = $this->Auth_model->get_by_id($this->session->userdata('email'));
                
                }
                $result = $this->Profil_model->update($data, $email);
                if ($result > 0) {
                    $this->updateProfil();
                    $this->session->set_flashdata('msg', show_succ_msg('Data Profile Berhasil diubah, silakan lakukan login ulang!'));
                    redirect('auth/profile');
                } else {
                    $this->session->set_flashdata('msg', show_err_msg('Data Profile Gagal diubah'));
                    redirect('auth/profile');
                } 
            // } else {
            //     $this->session->set_flashdata('msg', show_err_msg(validation_errors()));
            //     redirect('auth/profile');
    }
    