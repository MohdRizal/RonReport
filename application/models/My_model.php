<?php

class My_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function login($u)
	{
		$this->db->select('username, password');
		$this->db->from('users');
		$this->db->where('username', $u);
		//$this->db->where('password', $p);
		return $this->db->get()->row_array();
	}
	
	public function report($date_a, $date_b)
	{
		$this->db->select('a.title, a.publish_date, up.name, (h.hit_desktop + h.hit_mobile) as total_hit');
		$this->db->from('articles a');
		$this->db->join('hit h', 'h.article_id = a.id');
		$this->db->join('user_profiles up', 'up.user_id = a.editor_by');
		$this->db->where('a.publish_date BETWEEN "'.$date_a.' 00:00:00" AND "'.$date_b.' 23:59:59"');
		$this->db->order_by('total_hit', 'DESC');
		//$this->db->where('a.publish_date <=', $date_b);
		return $this->db->get()->result_array();
	}
	
	public function counter($date_a, $date_b)
	{
		$this->db->select('COUNT(a.id) as total, up.name, (SELECT SUM(hit_desktop + hit_mobile) as total_hit FROM hit JOIN articles ON hit.article_id = articles.id WHERE editor_by = up.user_id and publish_date between "'.$date_a.' 00:00:00" and "'.$date_b.' 23:59:59" GROUP BY up.user_id) as total_hit');
		$this->db->from('articles a');
		$this->db->join('user_profiles up', 'up.user_id = a.editor_by');
		$this->db->where('a.publish_date BETWEEN "'.$date_a.' 00:00:00" AND "'.$date_b.' 23:59:59"');
		
		$this->db->group_by('a.editor_by');
		
		return $this->db->get()->result_array();
	}

	public function total_hit_bulan_editor($awal, $akhir)
	{
		$this->db->select('SUM(hit_desktop + hit_mobile) as total');
		$this->db->from('hit');
		$this->db->join('articles', 'articles.id = hit.article_id');
		$this->db->where('articles.publish_date >=', $awal.' 00:00:00');
		$this->db->where('articles.publish_date <=', $akhir.' 23:59:59');
		$this->db->where('articles.delete_flag','0');
		return $this->db->get()->row_array();
	}
	
	public function wartawan($date_a, $date_b)
	{
		$this->db->select('a.title, a.publish_date, up.name, (h.hit_desktop + h.hit_mobile) as total_hit');
		$this->db->from('articles a');
		$this->db->join('hit h', 'h.article_id = a.id');
		$this->db->join('user_profiles up', 'up.user_id = a.written_by');
		$this->db->where('a.publish_date BETWEEN "'.$date_a.' 00:00:00" AND "'.$date_b.' 23:59:59"');
		$this->db->order_by('total_hit', 'DESC');
		//$this->db->where('a.publish_date <=', $date_b);
		return $this->db->get()->result_array();
	}
	
	public function counter_wartawan($date_a, $date_b)
	{
		return $this->db->query("SELECT name, (SELECT count(id) as total FROM articles WHERE written_by = u.user_id and publish_date between '$date_a 00:00:00' and '$date_b 23:59:59') as total, (SELECT SUM(hit_desktop + hit_mobile) as total_hit FROM hit JOIN articles ON hit.article_id = articles.id WHERE written_by = u.user_id and publish_date between '$date_a 00:00:00' and '$date_b 23:59:59' GROUP BY u.user_id) as total_hit FROM `user_profiles` u WHERE u.aktif = 1  group by u.id order by total desc")->result_array();
	}

	public function total_hit_bulan_wartawan($awal, $akhir)
	{
		$this->db->select('SUM(hit_desktop + hit_mobile) as total');
		$this->db->from('hit');
		$this->db->join('articles', 'articles.id = hit.article_id');
		$this->db->where('articles.publish_date >=', $awal.' 00:00:00');
		$this->db->where('articles.publish_date <=', $akhir.' 23:59:59');
		$this->db->where('articles.delete_flag','0');
		return $this->db->get()->row_array();
	}

	//list polling
	public function get_polling()
	{
		return $this->db->get('polling')->result_array();
	}

	//list opsi
	public function get_options($id)
	{
		return $this->db->get_where('poll_options', ['poll_id' => $id])->result_array();
	}
	
}