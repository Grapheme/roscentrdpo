<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
	
	$config = array(
		'literature_category_store' =>array(
			array('field'=>'title','label'=>'Название категории','rules'=>'required|trim'),
		),
        'literature_category_update' =>array(
			array('field'=>'id','label'=>'ID категории','rules'=>'required|integer'),
			array('field'=>'title','label'=>'Название категории','rules'=>'required|trim'),
		),
        'literature_document_store' =>array(
			array('field'=>'literature_category_id','label'=>'ID категории','rules'=>'required|trim'),
			array('field'=>'title','label'=>'Название документа','rules'=>'required|trim'),
		),
        'literature_document_update' =>array(
			array('field'=>'id','label'=>'ID документа','rules'=>'required|integer'),
			array('field'=>'literature_category_id','label'=>'ID категории','rules'=>'required|integer'),
			array('field'=>'title','label'=>'Название документа','rules'=>'required|trim'),
		),
	);