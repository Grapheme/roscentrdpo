<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Lecturesmodel extends CI_Model{

	var $id			= 0;
	var $number		= 0;
	var $title		= '';
	var $note		= '';
	var $document	= '';
	var $loaddate	= '';
	var $chapter	= 0;
	var $course		= 0;
	var $view		= 0;
	
	function __construct(){
		parent::__construct();
	}
	
	function insert_record($data){
			
		$this->number 	= $data['number'];
		$this->title 	= htmlspecialchars($data['title']);
		$this->note		= '';
		$this->document	= $data['document'];
		$this->loaddate	= date("Y-m-d");
		$this->chapter	= $data['chapter'];
		$this->course 	= $data['course'];
		$this->view 	= 1;
		
		$this->db->insert('lectures',$this);
		return $this->db->insert_id();
	}
	
	function active_status($id){
		
		$this->db->set('view',1);
		$this->db->where('id',$id);
		$this->db->update('lectures');
	}
	
	function deactive_status($id){
		
		$this->db->set('view',0);
		$this->db->where('id',$id);
		$this->db->update('lectures');
	}
	
	function read_record($id){
		
		$this->db->where('id',$id);
		$query = $this->db->get('lectures',1);
		$data = $query->result_array();
		if(isset($data[0])) return $data[0];
		return NULL;
	}
	
	function read_records($course){
		
		$this->db->order_by('number','ASC');
		$this->db->order_by('id','DESC');
		$this->db->where('course',$course);
		$query = $this->db->get('lectures');
		$data = $query->result_array();
		if(count($data)) return $data;
		return NULL;
	}
	
	function read_views_records($course,$chapter){
		
		$this->db->order_by('number','ASC');
		$this->db->order_by('id','DESC');
		$this->db->where('course',$course);
		$this->db->where('chapter',$chapter);
		$this->db->where('view',1);
		$query = $this->db->get('lectures');
		$data = $query->result_array();
		if(count($data)) return $data;
		return NULL;
	}
	
	function update_record($data){
		
		$this->db->set('number',$data['number']);
		$this->db->set('title',htmlspecialchars($data['title']));
		$this->db->set('note','');
		if(!empty($data['document'])):
			$this->db->set('document',$data['document']);
		endif;
		$this->db->set('loaddate',date("Y-m-d"));
		$this->db->where('id',$data['idlec']);
		
		$this->db->update('lectures');
		return $this->db->affected_rows();
	}
	
	function change_number($oldnumber,$number,$chapter){
		
		$this->db->set('number',$number);
		$this->db->where('chapter',$chapter);
		$this->db->where('number',$oldnumber);
		$this->db->update('lectures');
		return $this->db->affected_rows();
	}
	
	function ownew_course($id,$course){
		
		$this->db->where('id',$id);
		$this->db->where('course',$course);
		$query = $this->db->get('lectures',1);
		$data = $query->result_array();
		if(count($data)) return TRUE;
		return FALSE;
	}
	
	function read_records_chapter($course,$chapter){
		
		$this->db->where('course',$course);
		$this->db->where('chapter',$chapter);
		$query = $this->db->get('lectures');
		$data = $query->result_array();
		if(count($data)) return $data;
		return NULL;
	}
	
	function read_field($id,$field){
			
		$this->db->where('id',$id);
		$query = $this->db->get('lectures',1);
		$data = $query->result_array();
		if(isset($data[0])) return $data[0][$field];
		return FALSE;
	}
	
	function delete_record($id){
	
		$this->db->where('id',$id);
		$this->db->delete('lectures');
		return $this->db->affected_rows();
	}
	
	function count_records($chapter){
	
		$this->db->select('count(*) as cnt');
		$this->db->where('chapter',$chapter);
		$query = $this->db->get('lectures');
		$data = $query->result_array();
		return $data[0]['cnt'];
	}
	
	function count_course_record($course){
	
		$this->db->select('count(*) as cnt');
		$this->db->where('course',$course);
		$query = $this->db->get('lectures');
		$data = $query->result_array();
		return $data[0]['cnt'];
	}
	
	function next_number($chapter){
		
		$this->db->select('MAX(number) as number');
		$this->db->where('chapter',$chapter);
		$query = $this->db->get('lectures');
		$data = $query->result_array();
		return $data[0]['number']+1;
	}
}