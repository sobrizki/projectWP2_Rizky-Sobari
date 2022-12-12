<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Menu extends CI_Model {

function getDataMenu(){
    $query =$this->db->get('tb_menu');
    return $query->result();
}

function insertDataMenu($data) {
    $this->db->insert('tb_menu', $data);
}

function getDataMenuDetail($kdmenu)
{
    $this->db->where('kdmenu', $kdmenu);
    $query = $this->db->get('tb_menu');
    return $query->row();
}

function updateDataMenu($kdmenu, $data) {
    $this->db->where('kdmenu', $kdmenu);
    $this->db->update('tb_menu', $data);
}

function deleteDataMenu($kdmenu) {
    $this->db->where('kdmenu', $kdmenu);
    $this->db->delete('tb_menu');
}

}