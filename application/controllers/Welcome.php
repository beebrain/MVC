<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('Welcome_message');
	}
	
	public function showMyMessage(){
		$this->load->view('boot');
	}
	
	public function message($name,$surname){
		$complete = $name."___".$surname;
		$data['name'] = $complete;
		$data['info'] = "info about name";
		$this->load->view('Hello',$data);
		
	}
        
        public function Showmain(){
            $this->load->view('main');
        }
}
