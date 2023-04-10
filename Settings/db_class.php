<?php 

require('db_login.php');

class db_connection{

	// 2 attributes
	// db connection
	public $db = null;
	// query results
	public $results = null;

	function db_connect(){
		//connection
		$this->db = mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);
		//test the connection
		if (mysqli_connect_errno()) {
            
			return false;
		}else{
            
			return true;
		}
	}


	//execute a query
	/**
	*Query the Database
	* a connection and sql query
	*@return boolean
	**/
	function db_query($sqlQuery){
		if (!$this->db_connect()) {
			return false;
		} 
		elseif ($this->db==null) {
			return false;
		}

		//run query
		//echo($sqlQuery);
		$this->results = mysqli_query($this->db,$sqlQuery);
		
		if ($this->results == false) {
			return false;
		}else{
			return true;
		}
		
	}

	//fetch data
	/**
	*get select data
	*@record
	**/
	function db_fetch(){
		//check if result was set
		if ($this->results == null) {
			return false;
		}
		elseif ($this->results == false) {
			return false;
		}

		//return a record
		return mysqli_fetch_assoc($this->results);

	}

	function db_count(){
		//check if result was set
		if ($this->results == null) {
			return false;
		}
		elseif ($this->results == false) {
			return false;
		}
		
		//return a record
		return mysqli_num_rows($this->results);

	}	

}
?>