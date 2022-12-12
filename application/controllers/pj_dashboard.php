<?php

class PJ_Dashboard extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '2'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda belum login<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
            redirect('pj_auth/login');
        }
    }

    public function index()
    {
        $data['buku'] = $this->model_buku->tampil_data()->result();
        $this->load->view('templates/pj_header');
        $this->load->view('templates/pj_sidebar');
        $this->load->view('pj_dashboard', $data);
        $this->load->view('templates/pj_footer');
    }

    public function tambah_ke_keranjang($id)
    {
        $buku = $this->model_buku->find($id);

        $data = array(
            'id' => $buku->id_buku,
            'qty' => 1,
            'price' => $buku->harga,
            'name' => $buku->nm_buku,
    
        );

        $this->cart->insert($data);
        redirect('pj_dashboard');    
    }

    public function detail_keranjang()
    {
        $this->load->view('templates/pj_header');
        $this->load->view('templates/pj_sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/pj_footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        redirect('pj_dashboard/index');
    }

    public function pembayaran()
    {
        $this->load->view('templates/pj_header');
        $this->load->view('templates/pj_sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/pj_footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('templates/pj_header');
            $this->load->view('templates/pj_sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/pj_footer');
        } else{
            echo "MAAF, PESANAN ANDA GAGAL DIPROSES";
        }
        
    }

    public function detail($id_buku)
    {
        $data['buku'] = $this->model_buku->detail_buku($id_buku);
        $this->load->view('templates/pj_header');
        $this->load->view('templates/pj_sidebar');
        $this->load->view('detail_buku',$data);
        $this->load->view('templates/pj_footer');
    }
}