<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	
	var $loginstatus = array('zak'=>FALSE,'slu'=>FALSE,'adm'=>FALSE,'admin'=>FALSE,'fiz'=>FALSE,'status'=>FALSE);
	var $months = array("01"=>"января","02"=>"февраля","03"=>"марта","04"=>"апреля","05"=>"мая","06"=>"июня","07"=>"июля","08"=>"августа","09"=>"сентября","10"=>"октября","11"=>"ноября","12"=>"декабря");
	
	function __construct(){
		
		parent::__construct();
	}
	
	/*************************************************************************************************************/

    public function postDataValidation($rules){

        $this->load->library('form_validation');
        return $this->form_validation->run($rules);
    }

    public function filedelete($file = NULL){

        if(!is_null($file) && is_file($file)):
            @unlink($file);
            return TRUE;
        else:
            return FALSE;
        endif;
    }
	/*************************************************************************************************************/

	public function pagination($url,$uri_segment,$total_rows,$per_page){
		
		$this->load->library('pagination');
		$config['base_url'] = site_url($url);
		$config['uri_segment'] = $uri_segment;
		$config['total_rows'] = $total_rows;
		$config['per_page'] = $per_page;
		$config['num_links'] = 4;
		$config['first_link'] = 'В начало';
		$config['last_link'] = 'В конец';
		$config['next_link'] = 'Далее &raquo;';
		$config['prev_link'] = '&laquo; Назад';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['full_tag_open'] = '<div class="pagination"><ul>';
		$config['full_tag_close'] = '</ul></div>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
	
	public function sendMail($to,$from_mail,$from_name,$subject,$text,$attach = NULL){
		
		$this->load->library('email');
		$this->email->from($from_mail,'Центр обучения');
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($text);
		if(!is_null($attach) && file_exists($attach)):
			$this->email->attach($attach);
		endif;
		return $this->email->send();
	}
	
	public function translite($string){
		
		$rus = array("1","2","3","4","5","6","7","8","9","0","ё","й","ю","ь","ч","щ","ц","у","к","е","н","г","ш","з","х","ъ","ф","ы","в","а","п","р","о","л","д","ж","э","я","с","м","и","т","б","Ё","Й","Ю","Ч","Ь","Щ","Ц","У","К","Е","Н","Г","Ш","З","Х","Ъ","Ф","Ы","В","А","П","Р","О","Л","Д","Ж","Э","Я","С","М","И","Т","Б"," ");
		$eng = array("1","2","3","4","5","6","7","8","9","0","yo","iy","yu","","ch","sh","c","u","k","e","n","g","sh","z","h","","f","y","v","a","p","r","o","l","d","j","е","ya","s","m","i","t","b","Yo","Iy","Yu","CH","","SH","C","U","K","E","N","G","SH","Z","H","","F","Y","V","A","P","R","O","L","D","J","E","YA","S","M","I","T","B","-");
		$string = str_replace($rus,$eng,$string);
		if(!empty($string)):
			$string = preg_replace('/[^a-z0-9-]/','',strtolower($string));
			$string = preg_replace('/[-]+/','-',$string);
			$string = preg_replace('/[\.]+/','.',$string);
			return $string;
		else:
			return FALSE;
		endif;
	}

	function culculateDiscountSumma($orderID,$fiz = FALSE){
		
		if($fiz === FALSE):
			$course = $this->unionmodel->read_corder_group_records($orderID);
		else:
			$course = $this->fizunionmodel->read_corder_group_records($orderID);
		endif;
		$summa = 0;
		for($i=0;$i<count($course);$i++):
			$summa+=($course[$i]['cnt']*($course[$i]['price']-$course[$i]['discount']));
		endfor;
		return $summa;
	}

    function operation_date($field){

        $list = preg_split("/-/",$field);
        $nmonth = $this->months[$list[1]];
        $pattern = "/(\d+)(-)(\w+)(-)(\d+)/i";
        $replacement = "\$5 $nmonth \$1 г.";
        return preg_replace($pattern, $replacement,$field);
    }

    function operation_dot_date($field){

        $list = preg_split("/-/",$field);
        $pattern = "/(\d+)(-)(\w+)(-)(\d+)/i";
        $replacement = "\$5.$3.\$1";
        return preg_replace($pattern, $replacement,$field);
    }
}
?>