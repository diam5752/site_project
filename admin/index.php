<?php
// Initialize the session
session_start();

// If session variable is not set it will redirect to login page
if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header("location: login.php");
    exit;
}
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

    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome to administration panel.</h1>
    </div>


    <div class="container" >
        <div class="col-md-12 ">
            <h2 for="comment">Title:</h2>
                <form method="POST" action="upload.php" enctype="multipart/form-data">
                    <textarea class="form-control" rows="1" name="title" id="title"></textarea>
                    <h2 for="comment">Text:</h2>
                    <textarea class="form-control" rows="5" id="text" name="text"> </textarea>
                       <br>
                        <label for="file"> Pick a file :  </label>
		                <input type="file" name ="file">
                        <input type="submit" name = "submit_title">
                </form>
        </div>
    </div>



</body>
</html>


