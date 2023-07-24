<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kegiatan extends CI_Controller
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
      'kegiatan'  => $this->db->order_by('id DESC')->get('kegiatan')->result()
    ];
    $data['content'] = $this->load->view('kegiatan/index', $data, true);
    $this->load->view('layouts/main', $data);
  }
  public function store()
  {
    $this->form_validation->set_rules('nama_kegiatan', 'Nama kegiatan', 'required|max_length[20]');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
    if ($this->form_validation->run() == false) {
      $data['kegiatan'] = $this->db->order_by('id DESC')->get('kegiatan')->result();
      $data['content'] = $this->load->view('kegiatan/index', $data, true);
      $this->load->view('layouts/main', $data);
    } else {

      $file_kegiatan = $_FILES['file_kegiatan']['name'];
      if ($file_kegiatan) {
        // upload
        $upload_config['upload_path'] = './assets/img/kegiatan/';
        $upload_config['allowed_types'] = 'jpg|jpeg|png|webp';
        $upload_config['max_size'] = 12048; // 2MB
        $upload_config['encrypt_name'] = TRUE;

        $this->load->library('upload', $upload_config);

        if ($this->upload->do_upload('file_kegiatan')) {
          $file_kegiatan = $this->upload->data();
          $file_kegiatan = $file_kegiatan['file_name'];
          $data = [
            'nama_kegiatan' => $this->input->post('nama_kegiatan'),
            'deskripsi' => $this->input->post('deskripsi'),
            'file_kegiatan' => $file_kegiatan,
            'user_id' => $this->session->id,
            'post_at' => date("y-m-d")
          ];
          $this->db->insert('kegiatan', $data);
          $this->session->set_flashdata('success', 'Berhasil Menambahkan kegiatan');
          redirect('kegiatan');
        } else {
          echo $this->upload->display_errors();
        }
      }
    }
  }
  public function edit($id)
  {
    $data = [
      'pesan' => $this->db->order_by('id DESC')->get('kontak')->result(),
      'jumlah_pesan' => $this->db->get('kontak')->num_rows(),
      'kegiatan'  => $this->db->get_where('kegiatan', ['id' => $id])->row()
    ];

    $data['content'] = $this->load->view('kegiatan/edit', $data, true);
    $this->load->view('layouts/main', $data);
  }
  public function update($id)
  {
    $this->form_validation->set_rules('nama_kegiatan', 'Nama kegiatan', 'required');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

    if ($this->form_validation->run() == false) {
      $data = [
        'pesan' => $this->db->order_by('id DESC')->get('kontak')->result(),
        'jumlah_pesan' => $this->db->get('kontak')->num_rows(),
        'kegiatan'  => $this->db->get_where('kegiatan', ['id' => $id])->row()
      ];

      $data['content'] = $this->load->view('kegiatan/edit', $data, true);
      $this->load->view('layouts/main', $data);
    } else {
      // Ambil data dari form
      $nama_kegiatan = $this->input->post('nama_kegiatan');
      $deskripsi = $this->input->post('deskripsi');

      // Cek apakah ada file yang diupload
      if ($_FILES['file_kegiatan']['name']) {
        $config['upload_path'] = './assets/img/kegiatan/';
        $config['allowed_types'] = 'png|jpg|jpeg|webp';
        $config['max_size'] = 12048; // max size 12MB
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('file_kegiatan')) {
          $error = $this->upload->display_errors();
          // Tangani kesalahan upload file, misalnya tampilkan pesan error
          echo $error;
          return;
        } else {
          $file_data = $this->upload->data();
          $file_name = $file_data['file_name'];

          // Update data kegiatan dengan file baru
          $data = [
            'nama_kegiatan' => $nama_kegiatan,
            'deskripsi' => $deskripsi,
            'file_kegiatan' => $file_name
          ];
          // Hapus file kegiatan lama
          $old_kegiatan = $this->db->get_where('kegiatan', ['id' => $id])->row();
          $old_file = './assets/img/kegiatan/' . $old_kegiatan->file_kegiatan;
          if (file_exists($old_file)) {
            unlink($old_file);
          }
        }
      } else {
        // Update data kegiatan tanpa mengubah file
        $data = [
          'nama_kegiatan' => $nama_kegiatan,
          'deskripsi' => $deskripsi,
        ];
      }
      // Lakukan update ke database
      $this->db->where('id', $id);
      $this->db->update('kegiatan', $data);

      // Tampilkan pesan berhasil atau redirect ke halaman lain
      $this->session->set_flashdata('success', 'Berhasil mengedit kegiatan');
      redirect('kegiatan');
    }
  }
  public function delete($id)
  {
    // mengambil data berdasarkan parameter $id untuk menghapus gambar nya
    $data['kegiatan'] = $this->db->get_where('kegiatan', ['id' => $id])->row();
    unlink(FCPATH . 'assets/img/kegiatan/' . $data['kegiatan']->file_kegiatan);
    // Menghapus komentar
    // $this->db->delete('comment_kegiatan', ['kegiatan_id' => $id]);
    // hapus kegiatan
    $this->db->delete('kegiatan', ['id' => $id]);
    $this->session->set_flashdata('success', 'Berhasil Menghapus kegiatan');
    redirect('kegiatan');
  }
}
