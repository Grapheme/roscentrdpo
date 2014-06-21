<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Git_interface extends MY_Controller {
	
	function __construct(){
		
		parent::__construct();
	}
	
	public function gitDeployProject(){
		
		$config['test_mode'] = TRUE;
		$config['post'] = $this->input->post('payload');
		$config['remote'] = 'origin';
		$config['branch'] = $this->uri->segment(2);
		$config['repository_name'] = 'roscentrdpo';
		$config['repository_id'] = 21045095;
		$config['user_group'] = 'rikardo';
		$config['user_name'] = 'rikardo';
		$config['access_mode'] = 0744;
		$config['project_path'] = getcwd();
		$config['set_log'] = TRUE;
		
		$this->load->library('git');
		$this->git->init($config);
		
		if($this->uri->segment(3) == 'test'):
			$this->git->testConnect();
			return TRUE;
		elseif($this->uri->segment(3) == 'TSHZVixcD1cLGLSTObouk6Tmo3ChmyxD'):
			$this->git->execute('--version',TRUE);
		endif;
		
	}
}