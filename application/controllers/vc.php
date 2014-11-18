<?php
class VC extends CI_Controller {

	// Access this controller from http://localhost/buydo/index.php/vc/
	public function index($page)
	{
		$this->load->view('sample_view/main.html');
	}

	// Access this function from http://localhost/buydo/index.php/vc/show/<$page>
	// i.e. http://localhost/buydo/index.php/vc/show/sample
	public function show($page)
	{
		$this->load->view('header/header');
		$this->load->view('content/'.$page);

		$this->load->view('footer/footer');

      // $data['page_title'] = $page;
      // $this->load->view('header');
      // echo $page;
      // //$this->load->view('content', $data);
      // $this->load->view('footer');
	}

}
?>