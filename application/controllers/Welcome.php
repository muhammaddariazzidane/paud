<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{
		$data = [
			'kegiatan' => $this->db->order_by('id DESC')->get('kegiatan')->result()
		];
		$data['content'] = $this->load->view('pages/home', $data, true);
		$this->load->view('layouts/main', $data);
	}
	public function detail_kegiatan($id)
	{
		$data = [
			'kegiatan' => $this->db->get_where('kegiatan', ['id' => $id])->row()
		];
		$data['content'] = $this->load->view('kegiatan/detail', $data, true);
		$this->load->view('layouts/main', $data);
	}

	public function gallery()
	{
		$data['gallery'] = $this->db->order_by('id DESC')->get('gallery')->result();
		$data['content'] = $this->load->view('pages/gallery', $data, true);
		$this->load->view('layouts/main', $data);
	}
	public function kontak()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'pesan'	=> $this->input->post('pesan'),
			'tgl_dikirim'	=> date('y-m-d')
		];
		$this->db->insert('kontak', $data);
		$this->session->set_flashdata('success', 'Terimakasih, pesan anda sudah kami terima');
		redirect('/');
	}
}
