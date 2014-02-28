<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Art extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('art/index');
	}
	
	public function view_top_ten()
	{
		$this->load->model('Art_model');
		$data['images'] = $this->Art_model->get_last_ten_entries();
		$this->load->view('art/view_top_ten', $data);
	}
	
	public function view_by_piece($id = null)
	{
		$this->load->model('Art_model');
		$data['image'] = $this->Art_model->get_id($id);
		//var_dump($data);
		$this->load->view('art/view_art', $data);
	}
	
	public function edit_art()
	{
		$crud = new grocery_CRUD();
 
		$crud->set_subject('Art');
        $crud->set_table('user_art');
		$crud->required_fields('id', 'url');
        $output = $crud->render();
 
        $this->load->view('art/edit_multi_art', $output);
	}
	
	// public function curl_test()
	// {
		// // //extract data from the post
		// // extract($_POST);

		// // //set POST variables
		 // $url = 'https://rest.nexmo.com/sms/json';
		// $fields = array(
								// 'api_key' => urlencode('4dc8fb2c'),
								// 'api_secret' => urlencode('be11e06d'),
								// 'from' => urlencode('DFSLLC'),
								// 'to' => urlencode(014803896551),
								// 'type' => urlencode('text'),
								// 'text' => urlencode('This is a test text message')
						// );

		// //url-ify the data for the POST
		// foreach($fields as $key=>$value) 
		// { 
		// $fields_string .= $key.'='.$value.'&'; 
		// }
		
		// rtrim($fields_string, '&');

		// //open connection
		// $ch = curl_init();

		// //set the url, number of POST vars, POST data
		// curl_setopt($ch,CURLOPT_URL, $url);
		// curl_setopt($ch,CURLOPT_POST, count($fields));
		// curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

		// //execute post
		// $result = curl_exec($ch);

		// //close connection
		// curl_close($ch);
	// }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */