<?php

    class Login extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('Login_model');
        }

        public function index()
        {
            $this->load->view('login/index');
            if($this->Login_model->logged_id())
            {
                //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
                redirect(base_url().'home/index');
            } 
        }

        public function login_validation()
        {
            
                $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
                $this->form_validation->set_rules('password', 'Password', 'required');
            
                //get data dari FORM
                $email = $this->input->post('email', TRUE);
                $password = $this->input->post('password', TRUE);

                //checking data via model
                $checking = $this->Login_model->check_login('user', array('email' => $email), array('password' => $password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'email'   => $apps->email,
                            'password' => $apps->password
                            // 'user_pass' => $apps->password,
                            // 'user_nama' => $apps->nama_user
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        redirect(base_url().'home/index');

                    }
                } else {

                    $this->session->set_flashdata('error', 'Email dan Password salah');
                    redirect(base_url().'login/index');
                }
        
        }

        public function logout()
        {
            $this->session->unset_userdata('email');
            redirect(base_url().'login/index');
        }
    }