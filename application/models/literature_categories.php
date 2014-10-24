<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Literature_categories extends MY_Model{

    protected $table = "literature_categories";
    protected $primary_key = "id";
    protected $fields = array("*");
    protected $order_by = 'title';

    function __construct(){

        parent::__construct();
    }
}