<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller
{
	public function index()
	{
		// $this->load->model('modelbrg');
		// $data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('admin/templates_admin/header');
		$this->load->view('admin/templates_admin/sidebar');
		$this->load->view('admin/dashboard_admin');
		$this->load->view('admin/templates_admin/footer');
	}
}
