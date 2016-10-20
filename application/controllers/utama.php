<HTML><HEAD><TITLE>.:::: Powered By Ludarubma ::::.</TITLE></HEAD><?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends CI_Controller {

	public function index()
	{
		$data['judul']='tampilan_konten';
		$data['deskription']='Selamat datang';
		$this->load->view('templete',$data);
	}
}
