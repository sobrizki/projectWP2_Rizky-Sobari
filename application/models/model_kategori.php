<?php

class Model_kategori extends CI_Model{
    public function data_sains(){
        return $this->db->get_where("tb_buku",array('kategori' => 'sains'));
    }

    public function data_komik(){
        return $this->db->get_where("tb_buku",array('kategori' => 'komik'));
    }

    public function data_cerita(){
        return $this->db->get_where("tb_buku",array('kategori' => 'cerita'));
    }
    
    public function data_dongeng(){
        return $this->db->get_where("tb_buku",array('kategori' => 'dongeng'));
    }
}