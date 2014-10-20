<?php if(!defined('BASEPATH')) exit('no direct scripting allowed');

class Plural_words{

    private $CI;
	
	public function __construct(){
		
		$this->CI = & get_instance();
	}

	public function pluralCourses($count){
		
		$words = array('курс','курса','курсов');
		return $this->getWord($count,$words);
	}
	
	private function getWord($n,$words){
		
		$n = abs($n) % 100;
		$n1 = $n % 10;
		if ($n > 10 && $n < 20) return $words[2];
		if ($n1 > 1 && $n1 < 5) return $words[1];
		if ($n1 == 1) return $words[0];
		return $words[2];
	}
}
?>