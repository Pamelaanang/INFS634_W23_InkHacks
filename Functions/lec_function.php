<?php

 
//connnect to the controller
require("../Controllers/lec_controller.php");


//check if done button was clicked 
if (isset($_POST['reg'])){
	$l_fname = $_POST['l_fname'];
	$l_email = $_POST['l_email'];
	$l_number = $_POST['l_number'];
	$l_password = $_POST['l_password'];
	$l_description= $_POST['l_description'];
      
    $l_pass = md5($l_password);
        
    $aim_dir = "../Assets/pro_img/";
    $aim_file = $aim_dir.basename($_FILES['l_photo']["name"]);
    // $aim_file = "../p_imgs/".basename($_FILES['p_img']["name"]);
    $image_type = strtolower(pathinfo($aim_file, PATHINFO_EXTENSION));
   

  
    if (empty($_FILES["l_photo"]["name"])){
        ?>
        <script type="text/javascript">
            alert("This Section Shouldn't Be Empty");
           
        </script> 
    <?php
     
    }else{
        //check if its an actual image
        $check = getimagesize($_FILES["l_photo"]["tmp_name"]);
    
    if ($check == false){
        ?>
        <script type="text/javascript">
            alert("The File is Not an Image");
           
        </script> 
    <?php
      
    }
    //check if file already exists
    if (file_exists($aim_file)){
        ?>
        <script type="text/javascript">
            alert("Failed File Already Exists");
        </script> 
    <?php
       
    }
    
    //limit file size
    if ($_FILES["l_photo"]["size"] > 5000000){
        ?>
        <script type="text/javascript">
            alert("The File is Too Large");
        </script> 
    <?php
      
    }
    
    //limit file type
    if ($image_type != "jpg" && $image_type != "png" && $image_type != "jpeg" && $image_type != "gif"){
        ?>
        <script type="text/javascript">
            alert("Apologies, only JPG, JPEG, PNG & GIF Files are Allowed.");
        </script> 
    <?php
    }
 }
        $add_image = move_uploaded_file($_FILES["l_photo"]["tmp_name"], $aim_file);

        if ($add_image){
           
            $l_reg = add_new_lecturer_function($l_fname, $l_email, $l_number, $l_pass, $l_description, $l_photo);
                
      

            if($l_reg){
                ?>
                <script type="text/javascript">
                    alert("Enjoy Our Services");
                    window.location.href = "../login.php"; 
                </script> 
            <?php
            }else{
                ?>
                <script type="text/javascript">
                    alert("Failed to process. Kindly Enter Details Again");
                </script> 
            <?php
            }
        }else{
            ?>
            <script type="text/javascript">
                alert("Sorry, Something Went Wrong Try Again Later");
            </script> 
        <?php

    }

}

 
?>