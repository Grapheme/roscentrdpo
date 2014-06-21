<?php

/*
* Инструкция
* 	см. https://gist.github.com/oodavid/1809044
*	sudo chown -R имя владельца:группа владельца /ПУТЬ К ПРОЕКТУ
*	sudo chmod -R 0744 /ПУТЬ К ПРОЕКТУ
*	Вернуть требуемые права на папки, к примеру downloads 
*	Проверить работу от имени владельца, к примеру www-data
*	sudo --user=www-data git pull
*
*/

class Git {
	
	private $CI;
	
	protected $test_mode;
	protected $post;
	
	protected $remote;
	protected $branch;
	protected $repository_name;
	protected $repository_id;
	protected $user_group;
	protected $user_name;
	protected $access_mode;
	protected $project_path;
	protected $set_log;
	
	function __construct(){
		
		$this->CI = & get_instance();
	}
	
	public function init($params){
		
		$this->test_mode = isset($params['test_mode']) ? $params['test_mode'] : FALSE;
		
		$this->remote = isset($params['remote']) ? $params['remote'] : 'origin';
		$this->branch = isset($params['branch']) ? $params['branch'] : 'master';
		$this->user_group = isset($params['user_group']) ? $params['user_group'] : 'www-data';
		$this->user_name = isset($params['user_name']) ? $params['user_name'] : 'www-data';
		$this->access_mode = isset($params['access_mode']) ? $params['access_mode'] : 0744;
		$this->project_path = isset($params['project_path']) ? $params['project_path'] : getcwd();
		$this->set_log = isset($params['set_log']) ? $params['set_log'] : TRUE;
		
		$this->post = isset($params['post_data']) ? $params['post_data'] : FALSE;
		$this->repository_name = isset($params['repository_name']) ? $params['repository_name'] : 'undefined';
		$this->repository_id = isset($params['repository_id']) ? $params['repository_id'] : -1;
	}
	
	public function config($item = NULL){
		
		$config = array(
			'test_mode' => $this->test_mode, 
			'remote' => $this->remote,
			'branch' => $this->branch,
			'repository_name' => $this->repository_name, 
			'repository_id' => $this->repository_id,
			'user_group' => $this->user_group, 
			'user_name' => $this->user_name, 
			'access_mode' => $this->access_mode, 
			'project_path' => $this->project_path, 
			'set_log' => $this->set_log
		);
		
		if(!is_null($item) && isset($config[$item])):
			return $config[$item];
		else:
			return $config;
		endif;
	}
	
	public function parseRepository($item){
		
		if($this->post):
			if($jsonPost = json_decode($this->post,TRUE)):
				if(isset($jsonPost['repository'][$item])):
					return $jsonPost['repository'][$item];
				endif;
			endif;
		endif;
		return FALSE;
	}
	
	public function setAccessMode(){
		
		try {
			exec('chown -R '.$this->user_name.':'.$this->user_group.' '.$this->project_path,$result,$returnCode);
		} catch (Exception $e) {
			throw new Exception('Ошибка при смене владельца');
		}
		try {
			exec('chmod -R '.$this->user_name.' '.$this->project_path,$result,$returnCode);
		} catch (Exception $e) {
			throw new Exception('Ошибка при смене прав доступа');
		}
	}
	
	public function testConnect($command = 'ssh -T git@github.com'){
		
		try {
			exec($command,$result,$returnCode);
			echo "\nResult:\n"; print_r($result);
			echo "\Code:\n"; print_r($returnCode);
		} catch (Exception $e) {
			throw new Exception('Ошибка при смене владельца');
		}
	}
	
	public function execute($command = NULL,$test_mode = FALSE){
		
		if(is_null($command)):
			throw new Exception('Отсутствует комманда GIT');
		endif;
		
		if(!$this->permission()):
			throw new Exception('В доступе отказано');
		endif;
		try {
			exec($command.' 2>&1',$result,$returnCode);
		} catch (Exception $e) {
			throw new Exception('Невозможно вызвать комманду: '.$command);
		}
		if($this->set_log):
			echo "\ncommand:\n".$command;
			echo "\nResult:\n"; print_r($result);
			echo "\Code:\n"; print_r($returnCode);
			$this->CI->config->set_item('log_threshold',2);
			log_message('info','Выполнилась комманда '.$command.' Дата выполнения: '.date("d.m.Y H:i:s"));
			$this->CI->config->set_item('log_threshold',0);
		endif;
		return TRUE;
	}
	
	public function pull($test_mode = FALSE){
		
		if(!$this->permission()):
			throw new Exception('В доступе отказано');
		endif;
		
		try {
			exec('git pull '.$this->remote.' '.$this->branch.' 2>&1',$result,$returnCode);
		} catch (Exception $e) {
			throw new Exception('Невозможно вызвать комманду git pull'. $this->remote.' '.$this->branch);
		}
		
		if($this->set_log):
			echo "\ncommand:\n".$command;
			echo "\nResult:\n"; print_r($result);
			echo "\Code:\n"; print_r($returnCode);
			$this->config->set_item('log_threshold',2);
			log_message('info','Выполнилась комманда '.$command.' Дата выполнения: '.date("d.m.Y H:i:s"));
			$this->config->set_item('log_threshold',0);
		endif;
		return TRUE;
	}
	
	private function permission(){
		
		if($this->test_mode):
			return TRUE;
		endif;
		
		if($this->post):
			if($jsonPost = json_decode($this->post,TRUE)):
				if(isset($jsonPost['repository']) && $jsonPost['repository']['name'] == $this->repository_name && $jsonPost['repository']['id'] == $this->repository_id):
					return TRUE;
				endif;
			endif;
		endif;
		return FALSE;
	}
}