<?php

class Home extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $data = [
      'judul' => 'Katalog Buku',
      'buku' => $this->ModelBuku->getBuku()->result(),
    ];
    //jika sudah login dan jika belum login
    if ($this->session->userdata('email')) {
      $user = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row();

      $data['user'] = $user['nama'];

      $this->load->view('templates/templates_user/header', $data);
      $this->load->view('buku/daftarbuku', $data);

      $this->load->view('templates/templates_user/footer', $data);
    } else {
      $data['user'] = 'pengunjung';
      $this->load->view('templates/templates_user/header', $data);
      $this->load->view('buku/daftarbuku', $data);

      $this->load->view('templates/templates_user/footer', $data);
      }
  }

  public function detailBuku()
  {
    $id = $this->uri->segment(3);
    $buku = $this->ModelBuku->joinKategoriBuku(['buku.id' => $id])->result();

    $data['user'] = "pengunjung";
    $data['tittle'] = "Detail Buku";

    foreach ($buku as $fields) {
      $data['judul'] = $fields->judul_buku;
      $data['pengarang'] = $fields->pengarang;
      $data['penerbit'] = $fields->penerbit;
      $data['tahun'] = $fields->tahun_terbit;
      $data['isbn'] = $fields->isbn;
      $data['gambar'] = $fields->image;
      $data['dipinjam'] = $fields->dipinjam;
      $data['dibooking'] = $fields->dibooking;
      $data['stok'] = $fields->stok;
      $data['id'] = $fields->id;
    }
    $this->load->view('templates/templates_user/header', $data);
    $this->load->view('buku/detail-buku', $data);
    $this->load->view('templates/templates_user/footer', $data);
  }

}

?>