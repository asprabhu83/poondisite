<?php
class Crud_model extends CI_Model 
{
	function display_records()
	{
	$query=$this->db->query("select * from news_events where news_events.NewsEventsStatus='1' order by NewsEventsID desc limit 5");
	return $query->result();
	}
	
}