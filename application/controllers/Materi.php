<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Materi extends CI_Controller
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
      'materi'  => $this->db->order_by('id DESC')->get_where('materi', ['status' => 1])->result()
    ];
    $data['content'] = $this->load->view('materi/index', $data, true);
    $this->load->view('layouts/main', $data);
  }
  public function pengajuan()
  {
    $data = [
      'pesan' => $this->db->order_by('id DESC')->get('kontak')->result(),
      'jumlah_pesan' => $this->db->get('kontak')->num_rows(),
      'materi'  => $this->db->order_by('id DESC')->get_where('materi', ['status' => 0])->result()
    ];
    $data['content'] = $this->load->view('pengajuan/index', $data, true);
    $this->load->view('layouts/main', $data);
  }
  public function store()
  {
    $this->form_validation->set_rules('judul_materi', 'Judul Materi', 'required|max_length[20]');
    if ($this->form_validation->run() == false) {
      $data['materi'] = $this->db->order_by('id DESC')->get_where('materi', ['status' => 1])->result();
      $data['content'] = $this->load->view('materi/index', $data, true);
      $this->load->view('layouts/main', $data);
    } else {

      $file_materi = $_FILES['file_materi']['name'];
      if ($file_materi) {
        // upload
        $upload_config['upload_path'] = './assets/file/';
        $upload_config['allowed_types'] = 'pdf';
        $upload_config['max_size'] = 12048; // 2MB
        $upload_config['encrypt_name'] = TRUE;

        $this->load->library('upload', $upload_config);

        if ($this->upload->do_upload('file_materi')) {
          $file_materi = $this->upload->data();
          $file_materi = $file_materi['file_name'];
          $data = [
            'judul_materi' => $this->input->post('judul_materi'),
            'file_materi' => $file_materi,
            'user_id' => $this->session->id,
            'tgl_dibuat' => date("y-m-d"),
            'status'  => ($this->session->role_id == 1 ? 1 : 0)
          ];
          $this->db->insert('materi', $data);
          $this->session->set_flashdata('success', 'Berhasil Menambahkan kegiatan');
          redirect('materi');
        } else {
          echo $this->upload->display_errors();
        }
      }
    }
  }
  public function ubah_status($id)
  {
    // var_dump($id);
    // die;
    $this->db->set('status', 1);
    $this->db->where('id', $id);
    $this->db->update('materi');

    $this->session->set_flashdata('success', 'Berhasil Menyetujui pengajuan');
    redirect('materi/pengajuan');
  }
  public function delete($id)
  {
    // mengambil data berdasarkan parameter $id untuk menghapus gambar nya
    $data['materi'] = $this->db->get_where('materi', ['id' => $id])->row();
    unlink(FCPATH . 'assets/file/' . $data['materi']->file_materi);
    // Menghapus komentar
    // $this->db->delete('comment_kegiatan', ['kegiatan_id' => $id]);
    // hapus kegiatan
    $this->db->delete('materi', ['id' => $id]);
    $this->session->set_flashdata('success', 'Berhasil Menghapus materi');
    redirect('materi');
  }
}
