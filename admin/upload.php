<?php
	//Check if the file is well uploaded
	if($_FILES['file']['error'] > 0) { echo 'Error during uploading, try again'; }
	
	//We won't use $_FILES['file']['type'] to check the file extension for security purpose
	
	//Set up valid image extensions
	$extsAllowed = array( 'jpg', 'jpeg', 'png', 'gif' , 'mp4');
	
	//Extract extention from uploaded file
		//substr return ".jpg"
		//Strrchr return "jpg"
		
	$extUpload = strtolower( substr( strrchr($_FILES['file']['name'], '.') ,1) ) ;
	//Check if the uploaded file extension is allowed
	
	if (in_array($extUpload, $extsAllowed) ) { 
	
	//Upload the file on the server
	
	$name = "uploads/{$_FILES['file']['name']}";
	$result = move_uploaded_file($_FILES['file']['tmp_name'], $name);
	
	//if($result){ echo "<img src='$name'/>";}
		
    //} else { echo 'File is not valid. Please try again'; }


        include 'mysql_config.php';
        
        $text = $_POST["text"];
        echo $text; 
        echo '<br>';
        $title = $_POST["title"];
        echo $title;
    
        $sql = "INSERT INTO site_pages ( text , title , image)
             VALUES ( '$text' , '$title' , '$name' )";
              if ($conn->query($sql) === TRUE) {
                          echo "New record created successfully";
                      } else {
                          echo "Error: " . $sql . "<br>" . $conn->error;
                      }
        
        $conn->close();
        
    }
    header("Location: welcome.php");

?>