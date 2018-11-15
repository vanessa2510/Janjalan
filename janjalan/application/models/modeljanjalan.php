<?php
	class Modeljanjalan extends CI_Model{
		function gethotel(){
			$this->load->database();
			return $this->db->get('hotel');
		}
		function getkamar(){
			$this->load->database();
			return $this->db->get('kamar');
		}
		function getpesanan(){
			$this->load->database();
			return $this->db->get('pesanan');
		}
		function getinvoice(){
			$this->load->database();
			return $this->db->get('pembayaran');
		}
		function getcustomer(){
			$this->load->database();
			return $this->db->get('customer');
		}
		
		
		function delete_data($where, $table){
			$this->db->where($where);
			$this->db->delete($table);
		}
		function update_data($where, $data, $table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}
		function insert_data($data, $table){
			$this->db->insert($table,$data);
		}
		function get_where_data($where, $table){
			return $this->db->get_where($table,$where);
		}
		//fetch lokasi
		function get_lokasi(){
			return $this->db->get('lokasi');
		}
	}
?>