<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function index()
  {
    if ($this->session->nama) {
      redirect('dashboard');
    }
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|max_length[25]', ['required' => 'Email harus diisi', 'valid_email' => 'Email tidak valid', 'max_length' => 'Email Terlalu Panjang']);
    $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password harus diisi']);

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Login';
      $data['content'] = $this->load->view('auth/login', '', true);
      $this->load->view('layouts/main', $data);
    } else {
      $this->authenticate();
    }
  }
  private function authenticate()
  {
    if ($this->session->nama) {
      redirect('/');
    }
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $user = $this->db->get_where('user', ['email' => $email])->row();
    if ($user) {
      if (password_verify($password, $user->password)) {
        $data = [
          'id' => $user->id,
          'nama' => $user->nama,
          'role_id' => $user->role_id,
          'email' => $user->email,
        ];
        $this->session->set_userdata($data);
        redirect('/');
      } else {
        $this->session->set_flashdata('error', 'Email atau Password salah');
        redirect('login');
      }
    } else {
      $this->session->set_flashdata('error', 'login invalid');
      redirect('login');
    }
  }
  public function register()
  {
    if ($this->session->nama) {
      redirect('dashboard');
    }
    // 
    $this->form_validation->set_rules('nama', 'Nama', 'required|max_length[20]');
    $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]|max_length[25]');
    $this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');

    if ($this->form_validation->run() == false) {
      $data['title'] = 'Register';
      $data['content'] = $this->load->view('auth/register', '', true);
      // ini adalah layout nya
      $this->load->view('layouts/main', $data);
    } else {
      $this->Auth_model->store();
      $this->session->set_flashdata('success', 'Berhasil registrasi, silahkan login!');
      redirect('login');
    }
  }


  public function logout()
  {
    if (!$this->session->nama) {
      redirect('/');
    }
    $data = ['email', 'role_id', 'nama', 'id'];
    $this->session->unset_userdata($data);
    redirect('login');
  }
}
