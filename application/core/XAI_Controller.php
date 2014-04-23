<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

	class XAI_Controller extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			//	Set template build defaults
			$this->template
							->set_partial('html_head','layouts/_global/html_head')
							->set_partial('header','layouts/_global/header')
							->set_partial('footer','layouts/_global/footer')
							->set_layout('default');
		}
		
		public function _remap($method,$params = array())
		{
			if($method == 'index') $method = 'landing';
			if (method_exists($this, $method))
			{
					return call_user_func_array(array($this, $method), $params);
			}
			show_404();
		}
	}
