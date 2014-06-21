<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Git_interface extends MY_Controller {
	
	function __construct(){
		
		parent::__construct();
	}
	
	public function gitDeployProject(){
		
		if($this->uri->segment(3) == 'TSHZVixcD1cLGLSTObouk6Tmo3ChmyxD'):
			$config['test_mode'] = TRUE;
		else:
			$config['test_mode'] = FALSE;
		endif;
		$config['post'] = $this->input->post('payload');
		$config['remote'] = 'origin';
		$config['branch'] = $this->uri->segment(2);
		$config['repository_name'] = 'roscentrdpo';
		$config['repository_id'] = 21045095;
		$config['user_group'] = 'rikardo';
		$config['user_name'] = 'rikardo';
		$config['set_log'] = TRUE;
		
		$this->load->library('git');
		$this->git->init($config);
		
		if($this->uri->segment(3) == 'test'):
			echo $this->git->testConnect('/usr/bin/ssh -T git@github.com');
		else:
			echo $this->git->execute('/usr/local/bin/git reset --hard HEAD',$config['test_mode']);
			echo "\n";
			echo $this->git->execute('/usr/local/bin/git pull origin master',$config['test_mode']);
			echo "\n";
			echo $this->git->setAccessMode();
			echo "\n";
			echo $this->git->setAccessMode('/documents',0777);
		endif;
	}
}