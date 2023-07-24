<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }
  public function index()
  {
    $data = [
      'users' => $this->db->get('user')->num_rows(),
      'guru'  => $this->db->get_where('user', ['role_id' => 2])->num_rows(),
      'materi'  => $this->db->get_where('materi', ['status' => 1])->num_rows(),
      'pengajuan_materi'  => $this->db->get_where('materi', ['status' => 0])->num_rows(),
      'user'  => $this->db->order_by('id DESC')->get('user')->result(),
      'pesan' => $this->db->order_by('id DESC')->get('kontak')->result(),
      'jumlah_pesan' => $this->db->get('kontak')->num_rows()
    ];

    $data['content'] = $this->load->view('dashboard/index', $data, true);
    $this->load->view('layouts/main', $data);
  }
  public function delete_user($id)
  {
    // $data['user'] = $this->db->get_where('user', ['id' => $id])->row();
    $this->db->delete('user', ['id' => $id]);

    $this->session->set_flashdata('success', 'Berhasil menghapus user');
    redirect('dashboard');
  }
}
