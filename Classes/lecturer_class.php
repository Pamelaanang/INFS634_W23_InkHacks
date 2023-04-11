<?php
//connect to database class
require("../Settings/db_class.php");

class lecturer_class extends db_connection
{
	public function add_new_lecturer($l_fname, $l_email, $l_number, $l_password, $l_description, $l_photo)
	{
		//Write the sql to add a lecturer
		$sql = "INSERT INTO lecturers (`l_fname`, `l_email`, `l_number`, `l_password`, `l_description`,`l_photo`)
		 VALUES ('$l_fname', '$l_email', '$l_number', '$l_password', '$l_description', '$l_photo')";

		//return the executed the query
		return $this->db_query($sql);

	}

	/**
	 *method for view all lecturers
	 */
	public function view_all_lecturers()
	{
		//a query to get all lecturers
		$sql = "SELECT * FROM lecturers";

		//return the executed the query
		return $this->db_query($sql);
	}

	public function edit_one_lecturer($l_id, $l_fname, $l_number, $l_password, $l_description, $l_photo)
	{
		//a query to update customer
		$sql = "UPDATE lecturers SET `l_fname` = $l_fname, `l_number`= $l_number, 
        `l_password` = $l_password, `l_description` = $l_description, `l_photo` = $l_photo
		WHERE l_id = '$l_id' ";

		//return the executed the query
		return $this->db_query($sql);
	}

	public function verify_lec_login($l_email)
	{
		//sql query 
		$sql = "SELECT `l_id`, `l_fname`, `l_email`, `l_number`, `l_password`, `l_description`,`l_photo` FROM lecturers WHERE l_email = '$l_email'";
		//return the executed query
		if ($this->db_query($sql)) {
			return $this->db_fetch();
		}
		return null;
	}

	public function lec_login_details($l_id)
	{
		$sql = "INSERT INTO lec_details (`l_id`) VALUES ('$l_id')";

		return $this->db_query($sql);
	}

	public function lec_last_activity($l_id)
	{
		$sql = "UPDATE lec_details SET last_activity = now() WHERE `l_id` = '" . $l_id . "'";

		return $this->db_query($sql);
	}

}
?>