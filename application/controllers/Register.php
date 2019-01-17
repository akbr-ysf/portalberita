<?php

    class Register extends CI_Controller {

        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->model('Register_model');
        }

        public function index()
        {
            $this->load->view('register/index');
        }

        public function validation()
        {
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]');
            $this->form_validation->set_rules('nama', 'Username', 'required|trim');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if( $this->form_validation->run()) {
                
                $verifikasi = md5(rand());
                $data = [
                    'email'     => $this->input->post('email'),
                    'nama'      => $this->input->post('nama'),
                    'password'  => $this->input->post('password'),
                    'verifikasi' => $verifikasi
                ];

                $id = $this->Register_model->insert($data);
                if( $id > 0 ) {
                    
                    $subject = "Selamat datang di PortalBerita";
                    $message = "Hai, ".$this->input->post('nama').". Untuk verifikasi akun anda, silahkan masukkan kode $verifikasi pada form verifikasi.";
                    
                    $config = [
                        'protocol'     => 'smtp',
                        'smtp_host'    => 'ssl://smtp.gmail.com',
                        'smtp_port'    => 465,
                        'smtp_user'    => 'bhrdysf@gmail.com',
                        'smtp_pass'    => 'Zombieland97',
                        'mailType'     => 'html',
                        'charset'      => 'iso-8859-1',
                        'wordwrap'     => TRUE
                    ];
                    
                    $this->load->library('email', $config);
                    $this->email->set_newline("\r\n");
                    $this->email->from('bhrdysf@gmail.com');
                    $this->email->to( $this->input->post('email') );
                    $this->email->subject($subject);
                    $this->email->message($message);
                    
                    if( $this->email->send() ) {

                        $this->session->set_flashdata('message', 'Email berisi kode verifikasi telah dikirim. Cek email anda anda untuk verifikasi akun!');
                        redirect('register/verifikasi');

                    } else {

                        echo 'Terjadi kesalahan saat pengiriman';

                    }
                } else {

                    $this->index();

                }
            }
        }

        public function verifikasi()
        {
            $this->load->view('register/verifikasi');
            $this->form_validation->set_rules('verifikasi', 'Verifikasi', 'required');

            if( $this->form_validation->run())
            {
                $verifikasi = $this->input->post('verifikasi');
                $where = ['verifikasi' => $verifikasi];

                $cek = $this->Register_model->cek_verifikasi('user', $where)->num_rows();

                if( $cek > 0) {
                    $this->session->set_flashdata('message', 'Verifikasi berhasil. Sekarang anda dapat login kedalam PortalBerita!');
                    redirect('login/index');
                } else {
                    $this->session->set_flashdata('message', 'Verifikasi gagal. Cek lagi kode verifikasi pada email anda!');
                    redirect('register/verifikasi');
                }
            }
            
            
        }

    }