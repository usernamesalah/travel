<?php defined('BASEPATH') || exit('No direct script allowed');

class Chat_m extends MY_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->data['table_name']  = 'chat';
		$this->data['primary_key'] = 'id_chat';
	}
}

