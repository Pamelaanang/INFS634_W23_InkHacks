<?php
//connect to the product class

include(dirname(__FILE__)."/Classes/lecturer_class.php");


// require("../Classes/lecturer_class.php");

function add_new_lecturer_function($l_fname, $l_email, $l_number, $l_password, $l_description, $l_photo)
{
    echo'yow';
	//create an instance of lecturer class
	$new_lecturer_object = new lecturer_class();

	//run the add lecturer method
	$add_lecturer = $new_lecturer_object->add_new_lecturer($l_fname, $l_email, $l_number, $l_password, $l_description, $l_photo);
	if ($add_lecturer) {
		//return query result (boolean)
		return $add_lecturer;
	} else {
		return false;
	}
}

//view all lecturer function
function view_all_lecturer_fuction()
{
	//Create an array variable
	$lecturer_array = array();
    echo'hi';

	//create an instance of the lecturer class
	$lecturer_object = new lecturer_class();

	//run the view all lecturer method
	$lecturer_records = $lecturer_object->view_all_lecturers();
   
	//check if the method worked
	if ($lecturer_records) {
      
		//loop to see if there is more than one result
		//fetch one at a time
		while ($one_record = $lecturer_object->db_fetch()) {
			//Assign each result to the array
			$lecturer_array[] = $one_record;
		}
	}
	//return the array
	return $lecturer_array;
}

function view_lec_id(){
	$lec_object = new lecturer_class();

	$a_record = $lec_object->view_all_lecturers();

	if($a_record){
		$lec_array = array();
		while ($entries = $lec_object->db_fetch()){
			array_push(
				$lec_array,$entries['l_id']
			);
		} return $lec_array;
		
		}else{
			return false;
	}
}

function view_lec_name (){
		$lec_object = new lecturer_class();
	
		$a_record = $lec_object->view_all_lecturers();
	
		if($a_record){
			$lec_array = array();
			while ($entries = $lec_object->db_fetch()){
				array_push(
					$lec_array,$entries['l_fname']
				);
			} return $lec_array;
			
			}else{
				return false;
		}
	}

//edit a lecturer function - takes id, name and number
function edit_lecturer_lecturer_function($l_id, $l_fname, $l_number, $l_password, $l_description, $l_photo)
{
	//create an instance of the lecturer class
	$lecturer_lecturer_object = new lecturer_class();

	//run the edit one contacat method
	$edit_lecturer_lecturer = $lecturer_lecturer_object->edit_one_lecturer($l_id, $l_fname, $l_number, $l_password, $l_description, $l_photo);

	//check if method worked
	if ($edit_lecturer_lecturer) {

		//return query result (boolean)
		return $edit_lecturer_lecturer;
	} else {
		//return false
		return false;
	}
}

//function to get login information - 
function verify_lec_login_fxn($l_email)
{

	//Create an array variable
	$lec_login_array = array();

	//create an instance of the login class
	$lec_login_object = new lecturer_class();

	//fetch results and add to array
	$lec_login_array[] = $lec_login_object->verify_lec_login($l_email);

	//return array
	return $lec_login_array;
}


// function lec_login_details_function($l_id)
// {
// 	$newlec_Object = new lecturer_class;

// 	$return_lec = $newlec_Object->lec_login_details($l_id);
// 	if ($return_lec) {
// 		return $return_lec;
// 	} else {
// 		return false;
// 	}

// }

// function lec_last_activity_function($l_id)
// {
// 	$newlec_Object = new lecturer_class;

// 	$return_lec = $newlec_Object->lec_last_activity($l_id);
// 	if ($return_lec) {
// 		return $return_lec;
// 	} else {
// 		return false;
// 	}

// }

?>