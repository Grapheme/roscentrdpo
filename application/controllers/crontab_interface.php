<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Crontab_interface extends MY_Controller{
	
	function __construct(){
		
		parent::__construct();
	}
	
	public function emailNotification(){
		
		$this->load->helper('date');
		$query = "SELECT orders.id AS orderid,orders.number,orders.year,orders.closedate,orders.orderdate,customers.id AS customerid,customers.organization,customers.personemail FROM orders INNER JOIN customers ON orders.customer = customers.id WHERE orders.paid = 1 AND orders.userpaiddate != '0000-00-00' AND orders.numbercompletion = '' AND '".date("Y-m-d",now())."' >= SUBDATE(orders.closedate,2)";
		$query = $this->db->query($query);
		$customers = $query->result_array();
		for($i=0;$i<count($customers);$i++):
			ob_start();?>
<img src="<?=base_url('img/logo_small.png')?>" alt="" /><br/>
<?=anchor('','roscentrdpo.ru');?>
<p>Система дистанционного обучения АНО ДПО «Южно-окружной центр повышения квалификации»</p>
<p>Здравствуйте, <?=$customers[$i]['organization'];?></p>
<p>
	Система дистанционного обучения АНО ДПО «Южно-окружной центр повышения квалификации» 
	напоминает: 
	<h4>Ваш период сдачи итогового тестированя по заказу №<?=$customers[$i]['number'].'/'.$customers[$i]['year'];?> от <?=swap_dot_date($customers[$i]['orderdate']);?><br/>
	 наступает с <?=swap_dot_date($customers[$i]['closedate']);?> по <?=date("d.m.Y",future_days(COUNT_DAY_EXAMEN,$customers[$i]['closedate']));?></h4>
</p>
<br/><br/>
<p>
	Наш адрес:<br/>
	г.Ростов-на-Дону, ул.Республиканская, д.86<br/>
	Тел.:(863) 246-43-54<br/>
	Эл.почта: info@roscentrdpo.ru<br/>
	<br/>С уважением,<br/>Администрация Образовательного портала<br/>АНО ДПО «Южно-окружной центр повышения квалификации»
</p>
		<?php
			$mailtext = ob_get_clean();
			if($this->input->get('mode') == 'test'):
				echo $customers[$i]['personemail']."<br/>--------------------------<br/>";
				echo 'Текст письма:<br/>';
				echo $mailtext;
				echo '<br/>';
			else:
				$this->sendMail($customers[$i]['personemail'],'info@roscentrdpo.ru','АНО ДПО','Уведомление о итоговом тестировании',$mailtext);
			endif;
		endfor;
		echo 'OK';
	}

	public function notificationUnfinishedOrders(){
		
		$ur_orders = $this->db->select('orders.id AS orderid,orders.number,orders.year,orders.closedate,orders.orderdate,customers.id AS customerid,customers.organization AS client,customers.personemail AS email')
						->from('orders')->join('customers','orders.customer = customers.id')
						->where(array('orders.finish'=>0,'orders.deleted'=>0))
						->group_by('customerid')
						->get()->result_array();
		$fiz_orders = $this->db->select('fizorders.id AS orderid,fizorders.number,fizorders.year,fizorders.closedate,fizorders.orderdate,physical.id AS customerid,physical.fio AS client,physical.email AS email')
						->from('fizorders')->join('physical','fizorders.physical = physical.id')
						->where(array('fizorders.finish'=>0,'fizorders.deleted'=>0))
						->group_by('customerid')
						->get()->result_array();
		$orders = array_merge($ur_orders,$fiz_orders);
		foreach($orders as $order):
			$mailtext = $this->load->view('mails/unfinished-orders',array('order'=>$order),TRUE);
			if($this->input->get('mode') == 'test'):
				echo $order['email']."<br/>--------------------------<br/>";
				echo 'Текст письма:<br/>';
				echo $mailtext;
				echo '<br/>';
			else:
				$this->sendMail($order['email'],'info@roscentrdpo.ru','АНО ДПО','Неоформленные заказы',$mailtext);
			endif;
		endforeach;
		echo 'OK';
	}

	public function massMailing(){
		
		$ur_orders = $this->db->select('id,organization AS client,personemail AS email')->get('customers')->result_array();
		$fiz_orders = $this->db->select('id,fio AS client,email AS email')->get('physical')->result_array();
		$orders = array_merge($ur_orders,$fiz_orders);
        $sending = 0;
		foreach($orders as $order):
//			$mailtext = $this->load->view('mails/reklama281114',NULL,TRUE);
//			$mailtext = $this->load->view('mails/mass-mailing',array('order'=>$order),TRUE);
			$mailtext = $this->load->view('mails/obuchenie_ohrana_truda',array('order'=>$order),TRUE);
			if($this->input->get('mode') == 'test'):
				echo $mailtext;
                $this->sendMail('vkharseev@gmail.com','info@roscentrdpo.ru','Образовательный портал АНО ДПО «Южно-окружной центр повышения квалификации»','Обучение по охране труда при работе на высоте.',$mailtext);
                #$this->sendMail('info@roscentrdpo.ru','info@roscentrdpo.ru','Образовательный портал АНО ДПО «Южно-окружной центр повышения квалификации»','Обучение по охране труда при работе на высоте.',$mailtext);
				exit;
			else:
				echo $order['email']. '<br />';
                $sending++;
				$this->sendMail($order['email'],'info@roscentrdpo.ru','Образовательный портал АНО ДПО «Южно-окружной центр повышения квалификации»','Обучение по охране труда при работе на высоте.',$mailtext);
			endif;
		endforeach;
		echo "Отправлено писем: $sending";
	}
}