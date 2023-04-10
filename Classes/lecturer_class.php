<?php
//connect to database class
require("../Settings/db_class.php");

class lecturer_class extends db_connection{
    public function add_new_lecturer($l_fname, $l_email, $l_number, $l_password, $l_description, $l_photo){
		//Write the sql to add a lecturer
		$sql = "INSERT INTO lecturers (`l_fname`, `l_email`, `l_number`, `l_password`, `l_description`,`l_photo`)
		 VALUES ('$l_fname', '$l_email', '$l_number', '$l_password', '$l_description', '$l_photo')";
		
		//return the executed the query
		return $this->db_query($sql);
	}

	/**
    *method for view all lecturers
	*/
	public function view_all_lecturers(){
		//a query to get all lecturers
		$sql = "SELECT * FROM lecturers";

		//return the executed the query
		return $this->db_query($sql);
	}

    public function edit_one_lecturer($l_id, $l_fname, $l_number, $l_password, $l_description, $l_photo){
		//a query to update customer
		$sql = "UPDATE lecturers SET `l_fname` = $l_fname, `l_number`= $l_number, 
        `l_password` = $l_password, `l_description` = $l_description, `l_photo` = $l_photo
		WHERE l_id = '$l_id' ";
		
		//return the executed the query
		return $this->db_query($sql);
	}
}
?>