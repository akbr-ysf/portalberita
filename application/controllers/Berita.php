<?php

    class Berita extends CI_Controller {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('Berita_model');
            $this->load->library('form_validation');
            $this->load->helper('date');

        }

        public function index()
        {
            $data['judul'] = 'Daftar Berita';
            $data['berita'] = $this->Berita_model->getAllBerita();
            if( $this->input->post('keyword') ){
                $data['berita'] = $this->Berita_model->cariBerita();
            }
            
            $this->load->view('templates/header', $data);
            $this->load->view('berita/index', $data);
            $this->load->view('templates/footer');
        }

        public function tambah()
        {
            $data['judul'] = 'Unggah Berita';
            $data['datestring'] = '%d-%m-%Y';
            $data['time'] = time();

            $this->form_validation->set_rules('judul', 'Judul', 'required');
            $this->form_validation->set_rules('isi', 'Isi', 'required');

            if( $this->form_validation->run() == FALSE ){
                $this->load->view('templates/header', $data);
                $this->load->view('berita/tambah', $data);
                $this->load->view('templates/footer');
            } else {
                $this->Berita_model->tambahBerita();
                $this->session->set_flashdata('flash', 'Diterbitkan');
                redirect('berita');
            }
        }

        public function detail($id)
        {
            $data['judul'] = 'Detail Berita';
            $data['berita'] = $this->Berita_model->getBeritaById($id);

            $this->load->view('templates/header', $data);
            $this->load->view('berita/detail', $data);
            $this->load->view('templates/footer');
        }

        public function hapus($id)
        {
            $this->Berita_model->hapusBerita($id);
            $this->session->set_flashdata('flash', 'Dihapus');
            redirect('berita');
        }

        public function edit($id)
        {
            $data['judul'] = 'Edit Berita';
            $data['berita'] = $this->Berita_model->getBeritaById($id);
            $data['datestring'] = '%d-%m-%Y';
            $data['time'] = time();

            $this->form_validation->set_rules('judul', 'Judul', 'required');
            $this->form_validation->set_rules('isi', 'Isi', 'required');

            if( $this->form_validation->run() == FALSE ){
                $this->load->view('templates/header', $data);
                $this->load->view('berita/edit', $data);
                $this->load->view('templates/footer');
            } else {
                $this->Berita_model->EditBerita();
                $this->session->set_flashdata('flash', 'Diedit');
                redirect('berita');
            }
        }
    }