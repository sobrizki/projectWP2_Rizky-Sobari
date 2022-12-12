<?php

class PJ_Data_Barang extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Anda belum login<button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button></div>');
            redirect('pj_auth/login_admin');
        }
    }

    public function index()
    {
        $data['buku'] = $this->model_buku->tampil_data()->result();
        $this->load->view('pj_templates_admin/pj_header');
        $this->load->view('pj_templates_admin/pj_sidebar');
        $this->load->view('admin/pj_data_barang', $data);
        $this->load->view('pj_templates_admin/pj_footer');
    }

    public function pj_tambah_aksi()
    {
        $nm_buku = $this->input->post('nm_buku');
        $pengarang = $this->input->post('pengarang');
        $penerbit = $this->input->post('penerbit');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar =''){}else{
            $config ['upload_path'] = './uploads';
            $config ['allowed_types'] = 'jpg|jpeg|png|gif';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar Gagal diupload=)";
            }else {
                $gambar=$this->upload->data('file_name');
            }
            }
            
            $data = array(
                'nm_buku' => $nm_buku,
                'pengarang' => $pengarang,
                'penerbit' => $penerbit,
                'kategori' => $kategori,
                'harga' => $harga,
                'stok' => $stok,
                'gambar' => $gambar
            );

            $this->model_buku->pj_tambah_barang($data, 'tb_buku');
            redirect('pj_admin/pj_data_barang/index');
        }

        public function edit($id)
        {
            $where = array('id_buku' =>$id);
            $data['nm_buku'] = $this->model_buku->pj_edit_barang($where, 'tb_buku')->result();
            $this->load->view('pj_templates_admin/pj_header');
        $this->load->view('pj_templates_admin/pj_sidebar');
        $this->load->view('admin/pj_edit_barang', $data);
        $this->load->view('pj_templates_admin/pj_footer');
        }

        public function update(){
            $id = $this->input->post('id_buku');
            $nm_buku = $this->input->post('nm_buku');
            $pengarang = $this->input->post('pengarang');
            $penerbit = $this->input->post('penerbit');
            $kategori = $this->input->post('kategori');
            $harga = $this->input->post('harga');
            $stok = $this->input->post('stok');

            $data = array(
            'nm_buku' => $nm_buku,
            'pengarang' => $pengarang,
            'penerbit' => $penerbit,
            'kategori' => $kategori,
            'harga' => $harga,
            'stok' => $stok
            );

            $where = array(
                'id_buku' => $id);

                $this->model_buku->update_data($where,$data,'tb_buku');
                redirect('pj_admin/pj_data_barang/index');
        }

        public function hapus($id)
        {
            $where = array('id_buku' => $id);
            $this->model_buku->hapus_data($where, 'tb_buku');
            redirect('pj_admin/pj_data_barang/index');
        }
    }