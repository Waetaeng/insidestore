<?php

class Data_barang extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', 'Anda bukan Admin! Silahkan login ulang.');
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['barang'] = $this->model_barang->tampil_data()->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_aksi()
    {
        $nama_brg       = $this->input->post('nama_brg');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');
        $gambar         = $_FILES['gambar']['name'];

        $config['upload_path']      = './uploads';
        $config['allowed_types']    = 'jpg|jpeg|png|gif';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            echo "Upload foto berhasil!";
        } else {
            echo "Foto gagal diupload!";
        }


        $data = array(
            'nama_brg'      => $nama_brg,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar'        => $gambar
        );

        $this->model_barang->tambah_barang($data, 'tb_barang');
        $this->session->set_flashdata('pesan', 'Berhasil ditambah!');
        redirect('admin/data_barang');
    }

    public function edit($id)
    {
        $where = array('id_brg' => $id);
        $data['barang'] = $this->model_barang->edit_barang($where, 'tb_barang')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {

        $id  = $this->input->post('id_brg');

        $config['upload_path']      = './uploads';
        $config['allowed_types']    = 'jpg|jpeg|png|gif';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $gambar         = $_FILES['gambar']['name'];

            $data = array(
                'gambar' => $gambar
            );

            $where = array('id_brg' => $id);
            $this->model_barang->update_data($where, $data, 'tb_barang');
            redirect('admin/data_barang');
        } else {

            $nama_brg       = $this->input->post('nama_brg');
            $keterangan     = $this->input->post('keterangan');
            $kategori       = $this->input->post('kategori');
            $harga          = $this->input->post('harga');
            $stok           = $this->input->post('stok');


            $data = array(
                'nama_brg'      => $nama_brg,
                'keterangan'    => $keterangan,
                'kategori'      => $kategori,
                'harga'         => $harga,
                'stok'          => $stok
            );

            $where = array('id_brg' => $id);
            $this->model_barang->update_data($where, $data, 'tb_barang');
            $this->session->set_flashdata('pesan', 'Berhasil diubah!');
            redirect('admin/data_barang');
        }
    }


    public function hapus($id)
    {
        $where = array('id_brg' => $id);
        $this->model_barang->hapus_data($where, 'tb_barang');
        $this->session->set_flashdata('pesan', 'Berhasil dihapus!');
        redirect('admin/data_barang');
    }
}
