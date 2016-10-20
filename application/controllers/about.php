<HTML><HEAD><TITLE>.:::: Powered By Ludarubma ::::.</TITLE></HEAD><?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		$data['judul']='about';
		$data['deskription']='';
		$this->load->view('templete',$data);
	}
}