<?php
//connect to the program class
require("Classes/function_class.php");


//view all program function
    //view all program function
    function view_all_program_fuction(){
		//Create an array variable
		$program_array = array();
		
		//create an instance of the program class
		$program_object = new function_class();
		
		//run the view all program method
		$program_records = $program_object->view_all_programs();
		
		//check if the method worked
		if ($program_records) {
				
		//loop to see if there is more than one result
		//fetch one at a time
			while ($one_record = $program_object->db_fetch()) {
		//Assign each result to the array
			$program_array[] = $one_record;
				}
		}
			//return the array
			return $program_array;
	}



?>