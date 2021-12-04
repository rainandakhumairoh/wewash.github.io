<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/Pelanggan_model', 'PelangganModel');
    }

    public function index()
    {
        $title['title'] = ['header'=>'Pelanggan', 'dash'=>'Pelanggan'];
        $data['data'] = $this->PelangganModel->select();
        $this->load->view('admin/template/header', $title);
        $this->load->view('admin/pelanggan', $data);
        $this->load->view('admin/template/footer');
    }

    function simpan()
    {
        $data = $this->input->post();
        if($data['kd_pelanggan']==""){
            $result = $this->PelangganModel->insert($data);
            if($result)
                $this->session->set_flashdata('pesan', 'Data berhasil di simpan, success');
            else
                $this->session->set_flashdata('pesan', 'Data gagal di simpan, error');
            redirect('admin/pelanggan');
        }else{
            $data = $this->input->post();
            $result = $this->PelangganModel->update($data);
            if($result)
                $this->session->set_flashdata('pesan', 'Data berhasil di ubah, success');
            else
                $this->session->set_flashdata('pesan', 'Data gagal di ubah, error');
            redirect('admin/pelanggan');
        }
    }
    function ubah()
    {
        return $this->db->get('pelanggan');
        
    }
    function hapus($kd_pelanggan)
    {
        if($this->PelangganModel->delete($kd_pelanggan))
            $this->session->set_flashdata('pesan', 'Data berhasil di hapus, success');
        else
            $this->session->set_flashdata('pesan', 'Data gagal di hapus, error');
        redirect('admin/pelanggan');
    }
}
        
//     public function edit($id)
//     {
//     $where = array('kd_pelanggan' =>$id);
//     $data['data'] = $this->PelangganModel->edit_pelanggan($where,'pelanggan')->result();
//     $this->load->view('admin/pelanggan', $data);
//     }

//     public function update()
//     {
//     $id   = $this->input->post('kd_pelanggan');
//     $nama = $this->input->post('nama');
//     $alamat = $this->input->post('alamat');
//     $no_hp = $this->input->post('no_hp');
//     $jk  = $this->input->post('jk');


//     $data = array (
//         'kd_pelanggan' => $id ,
//         'nama' => $nama,
//         'alamat' => $alamat,
//         'no_hp' => $no_hp,
//         'jk' => $jk,
//     );

//     $where = array(
//         'kd_pelanggan'=>$id
//     );

//    $this->PelangganModel->update_pelanggan($where,$data,'pelanggan');
//    $this->load->view('admin/pelanggan');
//   redirect('admin/pelanggan');
//   }



/* End of file Controllername.php */
