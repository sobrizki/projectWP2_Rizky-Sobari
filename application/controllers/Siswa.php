<?php
class Siswa extends CI_Controller
{
    public function index()
    {
        
        $this->load->view('view-form-siswa');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama Siswa', 'required|min_length[1]', [
            'required' => 'Nama Siswa Harus diisi',
            'min_length' => 'Nama terlalu pendek'
        ]);

        $this->form_validation->set_rules('nis', 'NIS Siswa', 'required|min_length[1]', [
            'required' => 'NIS Siswa Harus diisi',
            'min_length' => 'NIS terlalu pendek'
        ]);

        $this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[1]', [
            'required' => 'Kelas Harus diisi',
            'min_length' => 'Kelas terlalu pendek'
        ]);

        $this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required|min_length[1]', [
            'required' => 'Tanggal Lahir Harus diisi',
            'min_length' => 'Tanggal Lahir terlalu pendek'
        ]);

        $this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required|min_length[1]', [
            'required' => 'Tempat Lahir Harus diisi',
            'min_length' => 'Tempat Lahir terlalu pendek'
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[1]', [
            'required' => 'Alamat Harus diisi',
            'min_length' => 'Alamat terlalu pendek'
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-siswa');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nis' => $this->input->post('nis'),
                'kelas' => $this->input->post('kelas'),
                'tgl' => $this->input->post('tgl'),
                'tempat' => $this->input->post('tempat'),
                'alamat' => $this->input->post('alamat'),
                'jeniskel' => $this->input->post('jeniskel'),
                'agama' => $this->input->post('agama')
            ];

            $this->load->view('view-data-siswa', $data);
        }
    }
}