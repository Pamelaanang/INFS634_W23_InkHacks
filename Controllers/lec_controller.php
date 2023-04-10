<?php
//connect to the product class
require("../Classes/lecturer_class.php");

function add_new_lecturer_function($l_fname, $l_email, $l_number, $l_password, $l_description, $l_photo){
	//create an instance of lecturer class
	$new_lecturer_object = new lecturer_class();
	
	//run the add lecturer method
	$add_lecturer = $new_lecturer_object->add_new_lecturer($l_fname, $l_email, $l_number, $l_password, $l_description, $l_photo);
	if ($add_lecturer) {
		//return query result (boolean)
		return $add_lecturer;
	}else{
		return false;
	}
}

    //view all lecturer function
    function view_all_lecturer_fuction(){
		//Create an array variable
		$lecturer_lecturer_array = array();
	
		//create an instance of the lecturer class
		$lecturer_lecturer_object = new lecturer_class();
	
		//run the view all lecturer method
		$lecturer_lecturer_records = $lecturer_lecturer_object->view_all_lecturers();
	
		//check if the method worked
		if ($lecturer_lecturer_records) {
			
			//loop to see if there is more than one result
			//fetch one at a time
			while ($one_record = $lecturer_lecturer_object->db_fetch()) {
				//Assign each result to the array
				$lecturer_lecturer_array[] = $one_record;
			}
		}
		//return the array
		return $lecturer_lecturer_array;
	}


    //edit a lecturer function - takes id, name and number
    	function edit_lecturer_lecturer_function($l_id, $l_fname, $l_number, $l_password, $l_description, $l_photo){
		//create an instance of the lecturer class
		$lecturer_lecturer_object = new lecturer_class();
	
		//run the edit one contacat method
		$edit_lecturer_lecturer = $lecturer_lecturer_object->edit_one_lecturer($l_id, $l_fname, $l_number, $l_password, $l_description, $l_photo);
	
		//check if method worked
		if ($edit_lecturer_lecturer) {
			
			//return query result (boolean)
			return $edit_lecturer_lecturer;
		}else{
			//return false
			return false;
		}
	}

    ?>