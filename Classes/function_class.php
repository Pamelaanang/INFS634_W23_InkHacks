<?php
//connect to database class
require("../Settings/db_class.php");

class function_class extends db_connection
{
	public function view_all_programs()
	{
		//a query to get all programs
		$sql = "SELECT * FROM program";

		//return the executed the query
		return $this->db_query($sql);
	}


}
?>