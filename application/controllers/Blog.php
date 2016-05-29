<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() //Method or Action
	{
		$articles = array(
				array('id'=>1,'title'=>'Title-1','description'=>'Description for Title1'),
				array('id'=>2,'title'=>'Title-2','description'=>'Description for Title2'),
				array('id'=>3,'title'=>'Title-3','description'=>'Description for Title3'),
				array('id'=>4,'title'=>'Title-4','description'=>'Description for Title4'),
				array('id'=>5,'title'=>'Title-5','description'=>'Description for Title5'),
				array('id'=>6,'title'=>'Title-6','description'=>'Description for Title6'),
				array('id'=>7,'title'=>'Title-7','description'=>'Description for Title7'),
				array('id'=>8,'title'=>'Title-8','description'=>'Description for Title8'),
				array('id'=>9,'title'=>'Title-9','description'=>'Description for Title9'),
				array('id'=>10,'title'=>'Title-10','description'=>'Description for Title10')
			);

		$data['variableName'] = $articles;

		$this->load->view('blog',$data);
	}

}
