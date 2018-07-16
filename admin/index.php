<?php
include_once 'dbconfig.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>


    <div class="container" >
        <div class="col-md-12 ">
            <h2 for="comment">Title:</h2>
                <form method="POST" action="upload.php" enctype="multipart/form-data">
                    <textarea class="form-control" rows="1" name="title" id="title"></textarea>
                    <h2 for="comment">Text:</h2>
                    <textarea class="form-control" rows="5" id="text" name="text"> </textarea>
                       <br>
                        <h2 for="file"> Pick a file :  </h2>
		                <input type="file" name="file" />
	                    <button type="submit" name="btn-upload">upload</button>
                </form>
        </div>
    </div>


    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="view.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>Upload video, image ...</label>
        <?php
	}
	?>


</body>
</html>
