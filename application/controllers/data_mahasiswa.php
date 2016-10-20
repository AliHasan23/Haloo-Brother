<HTML><HEAD><TITLE>.:::: Powered By Ludarubma ::::.</TITLE></HEAD><?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_mahasiswa extends CI_Controller {

	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_message('required','%s belum terisi');
		$this->form_validation->set_error_delimiters('<div style="color:blue;">','</div>');
		$this->form_validation->set_rules('nim', 'Nim', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('jekel', 'Jenis kelamin', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		 if ($this->form_validation->run() == FALSE)
                {
                      $data['judul']='form';
					  $data['deskription']='';
		  			  $this->load->view('templete',$data);  
                }
                else
                {
                        $this->load->view('tcontact');
                }
        }

   }
   	
?>