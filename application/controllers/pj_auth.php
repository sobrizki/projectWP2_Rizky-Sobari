<?php

class PJ_Auth extends CI_Controller {

    public function login()
    {

        $this->form_validation->set_rules('username','Username','required',['required' => 'Username wajib diisi!']);
        $this->form_validation->set_rules('password','Password','required',['required' => 'Password wajib diisi!']);
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/pj_header');
            $this->load->view('pj_form_login');
            $this->load->view('templates/pj_footer');
        } else {
            $pj_auth = $this->model_auth->cek_login();

            if($pj_auth == FALSE)
            {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Username atau Password Anda Salah!<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                redirect('pj_auth/login');
            } else {
                $this->session->set_userdata('username',$pj_auth->username);
                $this->session->set_userdata('role_id',$pj_auth->role_id);
                
                switch($pj_auth->role_id){
                    case 1 : redirect('pj_admin/pj_data_barang');
                    break;
                    case 2 : redirect('pj_dashboard');
                    break;
                    default: break;
                }
            }
            }

        }

        public function login_admin()
    {

        $this->form_validation->set_rules('username','Username','required',['required' => 'Username wajib diisi!']);
        $this->form_validation->set_rules('password','Password','required',['required' => 'Password wajib diisi!']);
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('templates/pj_header');
            $this->load->view('pj_form_login_admin');
            $this->load->view('templates/pj_footer');
        } else {
            $pj_auth = $this->model_auth->cek_login();

            if($pj_auth == FALSE)
            {
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Username atau Password Anda Salah!<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
                redirect('pj_auth/login_admin');
            } else {
                $this->session->set_userdata('username',$pj_auth->username);
                $this->session->set_userdata('role_id',$pj_auth->role_id);
                
                switch($pj_auth->role_id){
                    case 1 : redirect('pj_admin/pj_data_barang');
                    break;
                    case 2 : redirect('pj_dashboard');
                    break;
                    default: break;
                }
            }
            }

        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('pj_auth/login');
        }

        public function logout_admin()
        {
            $this->session->sess_destroy();
            redirect('pj_auth/login_admin');
        }
    }