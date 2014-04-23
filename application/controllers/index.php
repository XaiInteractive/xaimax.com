<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends XAI_Controller {

	public function home()
	{
		$data = array();
		$this->template
							->build('content/index/home',$data);
	}
}

/* End of file index.php */
/* Location: ./application/controllers/index.php */