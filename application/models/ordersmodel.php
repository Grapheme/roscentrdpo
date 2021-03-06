<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Ordersmodel extends CI_Model{

	var $id   				= 0;
	var $number				= 1;
	var $trend 				= 0;
	var $customer 			= '';
	var $orderdate  		= '0000-00-00';
	var $price  			= 0;
	var $finish				= 0;
	var $paid				= 0;
	var $paiddate			= '0000-00-00';
	var $userpaiddate		= '0000-00-00';
	var $closedate			= '0000-00-00';
	var $numberplacement	= '';
	var $numbercompletion	= '';
	var $year				= 14;
	var $deleted			= 0;
	
	function __construct(){
		parent::__construct();
	}
	
	function insert_record($number,$trend,$customer){
			
		$this->number	= $number;
		$this->trend	= $trend;
		$this->customer	= $customer;
		$this->orderdate= date("Y-m-d");
		$this->year = date("y");
		$this->price 	= 0;
		$this->finish	= 0;
		$this->paid		= 0;
		$this->paiddate	= '0000-00-00';
		$this->closedate= '0000-00-00';
		
		$this->db->insert('orders',$this);
		return $this->db->insert_id();
	}
	
	function active_status($id){
		
		$this->db->set('view',1);
		$this->db->where('id',$id);
		$this->db->update('orders');
	}
	
	function count_orders($customer){
		
		$this->db->select('*');
		$this->db->where('customer',$customer);
		$query = $this->db->get('orders');
		$data = $query->result_array();
		return count($data);
	}
	
	function deactive_status($id){
		
		$this->db->set('view',0);
		$this->db->where('id',$id);
		$this->db->update('orders');
	}
	
	function read_record($id){
		
		$this->db->where('id',$id);
		$query = $this->db->get('orders',1);
		$data = $query->result_array();
		if(isset($data[0])) return $data[0];
		return NULL;
	}
	
	function read_records(){
		
		$this->db->order_by('orderdate','DESC');
		$this->db->order_by('id','DESC');
		$query = $this->db->get('orders');
		$data = $query->result_array();
		if(count($data)) return $data;
		return NULL;
	}
	
	function update_field($id,$field,$data){
			
		$this->db->set($field,$data);
		$this->db->where('id',$id);
		$this->db->update('orders');
		return $this->db->affected_rows();
	}
	
	function read_active_orders(){
		
		$this->db->order_by('orderdate','DESC');
		$this->db->order_by('id','DESC');
		$this->db->where('paid','0');
		$query = $this->db->get('orders');
		$data = $query->result_array();
		if(count($data)) return $data;
		return NULL;
	}
	
	function read_deactive_orders(){
		
		$this->db->order_by('orderdate','DESC');
		$this->db->order_by('id','DESC');
		$this->db->where('paid','1');
		$query = $this->db->get('orders');
		$data = $query->result_array();
		if(count($data)) return $data;
		return NULL;
	}
	
	function read_customer_record($customer){
		
		$this->db->order_by('orderdate','DESC');
		$this->db->order_by('id','DESC');
		$this->db->where('deleted',0);
		$this->db->where('customer',$customer);
		$query = $this->db->get('orders');
		$data = $query->result_array();
		if(count($data)>0) return $data;
		return NULL;
	}
	
	function read_field($id,$field){
			
		$this->db->where('id',$id);
		$query = $this->db->get('orders',1);
		$data = $query->result_array();
		if(isset($data[0])) return $data[0][$field];
		return FALSE;
	}
	
	function delete_record($id){
	
		$this->db->where('id',$id);
		$this->db->delete('orders');
		return $this->db->affected_rows();
	}
	
	function delete_customer_records($customer){
	
		$this->db->where('customer',$customer);
		$this->db->delete('orders');
		return $this->db->affected_rows();
	}
	
	function add_price($order,$price){
		
		$this->db->set('price','price+'.$price,FALSE);
		$this->db->where('id',$order);
		$this->db->update('orders');
		return $this->db->affected_rows();
	}
	
	function sub_price($order,$price){
		
		$this->db->set('price','price-'.$price,FALSE);
		$this->db->where('id',$order);
		$this->db->update('orders');
		return $this->db->affected_rows();
	}

	function close_order($id){
		
		$this->db->set('finish',1);
		$this->db->where('id',$id);
		$this->db->update('orders');
		return $this->db->affected_rows();
	}
	
	function owner_order_nonfinish($id,$customer){
		
		$this->db->where('id',$id);
		$this->db->where('customer',$customer);
		$this->db->where('finish',0);
		$query = $this->db->get('orders',1);
		$data = $query->result_array();
		if(isset($data[0])) return TRUE;
		return FALSE;
	}
	
	function owner_order_finish($id,$customer){
		
		$this->db->where('id',$id);
		$this->db->where('customer',$customer);
		$this->db->where('finish',1);
		$query = $this->db->get('orders',1);
		$data = $query->result_array();
		if(isset($data[0])) return TRUE;
		return FALSE;
	}
	
	function paid_order($id,$status){
		
		$this->db->set('paid',$status);
		if(!$status):
			$date = '0000-00-00';
			$userdate = 'Не оплачен';
		else:
			$date = date("Y-m-d");
			$userdate = date("d.m.Y");
		endif;
		$this->db->set('paiddate',$date);
		$this->db->set('userpaiddate',$userdate);
		$this->db->where('id',$id);
		$this->db->update('orders');
		return $this->db->affected_rows();
	}

	function next_numbers(){
		
		$query = "SELECT MAX(numbercompletion*1)+1 AS completion, MAX(numberplacement*1)+1 AS placement FROM orders WHERE year = ".date("y");
		$query = $this->db->query($query);
		$data = $query->result_array();
		if(isset($data[0])) return $data[0];
		return NULL;
	}
	
	function last_id(){
		
		$query = "SELECT number FROM orders ORDER BY year DESC number DESC";
		$query = $this->db->query($query);
		$data = $query->result_array();
		if(isset($data[0])) return $data[0]['number'];
		return NULL;
	}
	
	function next_order(){
		
		$query = "SELECT MAX(number*1)+1 AS number FROM orders WHERE year = ".date("y");
		$query = $this->db->query($query);
		$data = $query->result_array();
		if($data[0]['number']) return $data[0]['number'];
		return 1;
	}
	
	function set_autoincrement($value){
		
		$query = "ALTER TABLE `orders` AUTO_INCREMENT = $value";
		$query = $this->db->query($query);
	}
	
	function valid_finish($order){
		
		$this->db->where('id',$order);
		$this->db->where('finish',1);
		$query = $this->db->get('orders',1);
		$data = $query->result_array();
		if(isset($data[0])) return TRUE;
		return FALSE;
	}
}