<?php
session_start();
ini_set('display_errors', 1);
Class Action {
	private $db;

	public function __construct() {
		ob_start();
   		include '../connection.php';
    
    	$this->db = $conn;
	}
	function __destruct() {
	    $this->db->close();
	    ob_end_flush();
	}

	function book_flight(){
		extract($_POST);
		foreach ($name as $k => $value) {
			$data = " flight_id = $flight_id ";
			$data .= " , name = '$name[$k]' ";
			$data .= " , address = '$address[$k]' ";
			$data .= " , passport = '$passport[$k]' ";
			$data .= " , contact = '$contact[$k]' ";

			$save[] = $this->db->query("INSERT INTO booked_flight set ".$data);
		}
		if(isset($save))
			return 1;
	}
}