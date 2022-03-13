<?php

class Data_model extends CI_Model{
	
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	public function total_berita()
	{
		$this->db->select('COUNT(id) as total');
		$this->db->from('articles');
		$this->db->where('articles.delete_flag','0');
		return $this->db->get()->row_array();
	}
	
	public function total_berita_bulan($awal, $akhir)
	{
		$this->db->select('COUNT(id) as total');
		$this->db->from('articles');
		$this->db->where('articles.delete_flag','0');
		$this->db->where('articles.publish_date >=', $awal.' 00:00:00');
		$this->db->where('articles.publish_date <=', $akhir.' 23:59:59');
		return $this->db->get()->row_array();
	}
	
	public function total_hit()
	{
		$this->db->select('SUM(hit_desktop + hit_mobile) as total');
		$this->db->from('hit');
		$this->db->join('articles', 'articles.id = hit.article_id');
		$this->db->where('articles.delete_flag','0');
		return $this->db->get()->row_array();
	}
	
	public function total_hit_bulan($awal, $akhir)
	{
		$this->db->select('SUM(hit_desktop + hit_mobile) as total');
		$this->db->from('hit');
		$this->db->join('articles', 'articles.id = hit.article_id');
		$this->db->where('articles.publish_date >=', $awal.' 00:00:00');
		$this->db->where('articles.publish_date <=', $akhir.' 23:59:59');
		$this->db->where('articles.delete_flag','0');
		return $this->db->get()->row_array();
	}
	
	public function artikel_hit()
	{
		return $this->db->query("SELECT articles.id, articles.title, articles.publish_date, articles.alias, (hit_desktop + hit_mobile) as total_hit FROM `articles` JOIN hit ON articles.id = hit.article_id ORDER BY (hit_desktop + hit_mobile) DESC LIMIT 5")->result_array();
	}
	
	public function artikel_hit_bulan($awal)
	{
		return $this->db->query("SELECT articles.id, articles.title, articles.publish_date, articles.alias, articles.publish_date, (hit_desktop + hit_mobile) as total_hit FROM `articles` JOIN hit ON articles.id = hit.article_id WHERE articles.publish_date >= '".$awal." 00:00:00' ORDER BY (hit_desktop + hit_mobile) DESC LIMIT 5")->result_array();
	}
	
	public function insert_ePaper($data)
	{
		return $this->db->insert('e_paper', $data);
	}
}