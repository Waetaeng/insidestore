<?php

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', 'Anda bukan User! Silahkan login ulang.');
            redirect('auth/login');
        }
    }

    public function tambah_ke_keranjang($id)
    {
        $barang = $this->model_barang->find($id);

        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg
        );

        $this->cart->insert($data);
        $this->session->set_flashdata('pesan', 'Barang telah masuk keranjang');
        redirect('welcome');
    }

    public function detail_keranjang()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang()
    {
        $this->cart->destroy();
        $this->session->set_flashdata('pesan', 'Barang checkout telah dihapus');
        redirect('welcome');
    }

    public function pembayaran()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan()
    {
        $is_processed = $this->model_invoice->index();

        if ($is_processed) {
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');

            $this->session->set_flashdata('pesan', 'Barang telah diproses');
            redirect('welcome');
        } else {
            echo "Maaf, Pesanan Anda Gaagal diproses!";
        }
    }

    public function detail($id_brg)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_brg);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_barang', $data);
        $this->load->view('templates/footer');
    }
}
