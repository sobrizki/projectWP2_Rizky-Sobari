<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
    {
        $data['buku'] = $this->model_buku->tampil_data()->result();
        $this->load->view('templates/pj_header');
        $this->load->view('templates/pj_sidebar');
        $this->load->view('pj_dashboard', $data);
        $this->load->view('templates/pj_footer');
    }

	/*public function __construct(){
		parent::__construct();
		$this->load->model('M_Menu');
	}

	public function index()
	{
		$queryAllMenu = $this->M_Menu->getDataMenu();
		$DATA = array('queryAllMenu' => $queryAllMenu);
		$this->load->view('welcome_message', $DATA);
	}

	public function hlmn_tmbh_menu()
	{
		$this->load->view('hlmn_tmbh_menu');
	}

	public function hlmn_edit_menu($kdmenu)
	{
	$queryMenuDetail = $this->M_Menu->getDataMenuDetail($kdmenu);
	$DATA = array('queryMenuDetail' => $queryMenuDetail);
	$this->load->view('hlmn_edit_menu', $DATA);
	}

	public function fungsiTambahMenu()
	{
		$kdmenu = $this->input->post('kdmenu');
		$nmmenu = $this->input->post('nmmenu');
		$harga = $this->input->post('harga');
		$gambar = $this->input->post('gambar');

		$ArrInsert = array(
			'kdmenu' => $kdmenu,
			'nmmenu' => $nmmenu,
			'harga' => $harga,
			'gambar' => $gambar

		);

		$this->M_Menu->insertDataMenu($ArrInsert);
		redirect(base_url(''));
	}

	public function fungsiEdit()
	{
		$kdmenu = $this->input->post('kdmenu');
		$nmmenu = $this->input->post('nmmenu');
		$harga = $this->input->post('harga');
		$gambar = $this->input->post('gambar');

		$ArrUpdate = array(
			'kdmenu' => $kdmenu,
			'nmmenu' => $nmmenu,
			'harga' => $harga,
			'gambar' => $gambar

		);

		$this->M_Menu->updateDataMenu($kdmenu, $ArrUpdate);
		redirect(base_url(''));

		
	}

	public function fungsiDelete($kdmenu){
		$this->M_Menu->deleteDataMenu($kdmenu);
		redirect(base_url(''));
	}*/
}