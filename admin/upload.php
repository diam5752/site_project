<?php
include_once 'dbconfig.php';
if(isset($_POST['btn-upload']))
{

	//$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
	$file_size = $_FILES['file']['size'];
	$file_type = $_FILES['file']['type'];
	$folder="../user/uploads/";
	
	// new file size in KB
	$new_size = $file_size/1024;
	// new file size in KB
	
	// make file name in lower case
	//$new_file_name = strtolower($file);
	// make file name in lower case
	
	//$final_file=str_replace(' ','-',$new_file_name);
    $final_file = $_FILES['file']['name'];

    $text = $_POST["text"];
    $title = $_POST["title"];
    $name = "site_project/user/uploads/{$_FILES['file']['name']}";
    
	if(move_uploaded_file($file_loc,$folder.$final_file))
	{
		$sql="INSERT INTO site_pages (title,text,image,file,type,size) VALUES('$title','$text', '$name', '$final_file','$file_type','$new_size')";
		mysqli_query($mysql_conn,$sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='index.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='index.php?fail';
        </script>
		<?php
	}
}
?>
