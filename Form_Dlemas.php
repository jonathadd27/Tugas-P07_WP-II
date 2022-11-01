<?php
class Form_Dlemas extends CI_Controller
{
    
    public function index()
    {

            $data['agama'] = ['Islam', 'Kristen', 'Katolik', 'Budha', 'Hindu', 'Protestan', 'Khonghucu'];
            $this->load->view('view-form-dlemas', $data);
    }

    public function hasil()
    {
    $data = [
    'nama' => $this->input->post('nama'),
    'nis' => $this->input->post('nis'),
    'kelas' => $this->input->post('kelas'),
    'tgl_lahir' => $this->input->post('tgl_lahir'),
    'tempat_lahir' => $this->input->post('tempat_lahir'),
    'alamat' => $this->input->post('alamat'),
    'jk' => $this->input->post('jk'),
    'agama' => $this->input->post('agama')
    ];
    $this->load->view('view-data-dlemas', $data);
    }
}
?>