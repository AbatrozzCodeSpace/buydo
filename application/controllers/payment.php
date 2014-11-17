<?php
class VC extends CI_Controller {

	// Access this controller from http://localhost/buydo/index.php/vc/
	public function index($page)
	{
		$this->load->view('sample_view/main.html');
	}

	// Access this function from http://localhost/buydo/index.php/vc/show/<$page>
	// i.e. http://localhost/buydo/index.php/vc/show/main
	// 		http://localhost/buydo/index.php/vc/show/page2
	public function show($page)
	{
      $data['page_title'] = $page;
      $this->load->view('header');
      echo $page;
      //$this->load->view('content', $data);
      $this->load->view('footer');
	}
}
?>
