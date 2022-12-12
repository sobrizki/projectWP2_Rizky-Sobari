<?php

class Kategori extends CI_Controller{
    public function sains()
    {
        $data['sains'] = $this->model_kategori->data_sains()->result();
        $this->load->view('templates/pj_header');
        $this->load->view('templates/pj_sidebar');
        $this->load->view('sains',$data);
        $this->load->view('templates/pj_footer');
    }

    public function komik()
    {
        $data['komik'] = $this->model_kategori->data_komik()->result();
        $this->load->view('templates/pj_header');
        $this->load->view('templates/pj_sidebar');
        $this->load->view('komik',$data);
        $this->load->view('templates/pj_footer');
    }

    public function cerita()
    {
        $data['cerita'] = $this->model_kategori->data_cerita()->result();
        $this->load->view('templates/pj_header');
        $this->load->view('templates/pj_sidebar');
        $this->load->view('cerita',$data);
        $this->load->view('templates/pj_footer');
    }

    public function dongeng()
    {
        $data['dongeng'] = $this->model_kategori->data_dongeng()->result();
        $this->load->view('templates/pj_header');
        $this->load->view('templates/pj_sidebar');
        $this->load->view('dongeng',$data);
        $this->load->view('templates/pj_footer');
    }
}