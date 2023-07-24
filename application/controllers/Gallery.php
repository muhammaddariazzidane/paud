<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }
  public function index()
  {
    $data = [
      'pesan' => $this->db->order_by('id DESC')->get('kontak')->result(),
      'jumlah_pesan' => $this->db->get('kontak')->num_rows(),
      'gallery' => $this->db->order_by('id DESC')->get('gallery')->result()
    ];
    $data['content'] = $this->load->view('gallery/index', $data, true);
    $this->load->view('layouts/main', $data);
  }
  public function store()
  {
    $file_gallery = $_FILES['file_gallery']['name'];
    if ($file_gallery) {
      // upload
      $upload_config['upload_path'] = './assets/img/gallery/';
      $upload_config['allowed_types'] = 'jpg|jpeg|png|webp';
      $upload_config['max_size'] = 12048; // 2MB
      $upload_config['encrypt_name'] = TRUE;

      $this->load->library('upload', $upload_config);

      if ($this->upload->do_upload('file_gallery')) {
        $file_gallery = $this->upload->data();
        $file_gallery = $file_gallery['file_name'];
        $data = [
          'file_gallery' => $file_gallery,
        ];
        $this->db->insert('gallery', $data);
        $this->session->set_flashdata('success', 'Berhasil Menambahkan kegiatan');
        redirect('gallery');
      } else {
        echo $this->upload->display_errors();
      }
    }
  }
}
