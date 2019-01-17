<?php

class Home extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        
        $this->load->model('Home_model');
        if( $this->session->userdata('email'))
        {

        } else {
            redirect(base_url('login/index'));
        }
    }
    
    public function index()
    {
        $data['judul'] = 'Portal Berita';
        $data['berita'] = $this->Home_model->getAllBerita();
        if( $this->input->post('keyword') ){
        $data['berita'] = $this->Home_model->cariBerita();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Berita';
        $data['berita'] = $this->Home_model->getBeritaById($id);

        $this->load->view('templates/header', $data);
        $this->load->view('home/detail', $data);
        $this->load->view('templates/footer');
    }

}