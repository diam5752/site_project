<?php
    //Step1
 $db = mysqli_connect('localhost','root','','site_gen_project')
 or die('Error connecting to MySQL server.');
?>
    <?php
//Step2
$query = "SELECT * FROM site_pages  ORDER BY views DESC";
mysqli_query($db, $query) or die('Error querying database.');
    $result = mysqli_query($db, $query);
    //$row = mysqli_fetch_array($result);
    $row = mysqli_num_rows($result);
    $a = array();
while ($row = mysqli_fetch_array($result)) {
    //$row;
    array_push($a,$row);
 //echo $row['id'] . ' ' . $row['title'] . ': ' . $row['text'] . ' ' . $row['image'] .'<br />';
}
 //echo $row['views'] . '<br>';
$var = $a[4][1];
//print_r($a[3][1] );
//echo "<h5 class='small'> <b> $var</b> </h5>"
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <title>site project</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" href="mystyle.css">
        </head>

        <body>

            <div class="jumbotron jumbotron-fluid">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-dark" style="position:relative;top:-15px;">
                        <div class="d-flex w-50 order-0">
                            <a class="navbar-brand mr-1" href="#" style="position:relative;top:-15px;left:17px; "> <img src="uploads/logo.png"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        </div>
                        <div class="navbar-collapse collapse justify-content-center order-2" id="collapsingNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">
                                        <p class="text-white" style="font-size:17px;white-space: nowrap;"> V. DIGITALE </p>
                                    </a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">
                                        <p class="text-white" style="font-size:17px;white-space: nowrap;">V. CARTECEA</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="//codeply.com">
                                        <p class="text-white" style="font-size:17px;white-space: nowrap;">CONTENUTO</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <p class="text-white" style="font-size:17px;white-space: nowrap;">EDIZIONI PASSATE</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <span class="navbar-text small text-truncate mt-1 w-50 text-right order-1 order-md-last"></span>
                    </nav>

                    <div>
                        <img src="uploads/videoblog.png" class="mx-auto d-block" style="position: relative;bottom:-50px;">
                        <h4 class="text-center text-white" style="font-size:14px;position: relative;bottom:-55px;">LE NEWS SUL MONDO DEL MATRIMONIO</h4>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-sm-1">
                        <img src="uploads/monda_sposa.png">
                    </div>
                    <div class="col-sm-11">
                        <div class="form-group">
                            <div>
                                <div class="float-right">
                                    <button type="button" class="btn btn-info">Info</button>
                                </div>
                                <div class="float-right">
                                    <input type="text" class="form-control ">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <br>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2"> </div>
                    <div class="col-sm-5" style="margin-right:30px;">

                        <?php
            if(isset($_GET['chooser']) && !empty($_GET['chooser'])){
                $chooser =  $_GET['chooser'];
            } else {
                $chooser = 0;
            }

            $var_title = $a[$chooser][1];
            $var_video = $a[$chooser][3];
            $var_text = $a[$chooser][2];
            echo "  <h2>$var_title </h2> ";
            echo "<br>
            <video style='width: 100%; height: auto;' controls>
                        <source src='/site_project/user/$var_video' type='video/mp4'> </video>";
            echo " <br> <p> $var_text </p>";

            ?>

                            <img src="uploads/line.png">
                            <span class="text-right  small text-muted"> CONDIVIDI QUESTO ARTICOLO</span>
                            <img style="float: right; margin: 0px 0px 15px 15px;" src="uploads/pinterest_icon.png">
                            <img style="float: right; margin: 0px 0px 15px 15px;" src="uploads/tweeter_icon.png">
                            <img style="float: right; margin: 0px 0px 15px 15px;" src="uploads/google_icon.png">
                            <img style="float: right; margin: 0px 0px 15px 15px;" src="uploads/facebook_icon.png">

                    </div>

                    <div class="col-sm-4">
                        <br><br>
                        <h6 class="text-left small text-muted">ULTIMI VIDEO PUBLICATI</h6>
                        <br>

                        <div class="row">
                            <div class="col-sm-3">
                                <?php
                    $var2 = $a[0][3];
                    echo " <video  preload='metadata' height='72' width='85'>
                        <source src='/site_project/user/$var2' type='video/mp4'> </video> "
                    ?>
                            </div>
                            <div class="col-sm-4"> <br>
                                <?php
                    $var = $a[0][1];

                    echo " <a  class='text-dark' href='http://localhost/site_project/user/test.php?chooser=0'>
                                <h5 class='small'> <b> $var</b> </h5> </a>";
             ?>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3">
                                <?php
                    $var2 = $a[1][3];
                    echo " <video  preload='metadata' height='72' width='85'>
                        <source src='/site_project/user/$var2' type='video/mp4'> </video> "
                    ?>
                            </div>
                            <div class="col-sm-4"> <br>

                                <?php
                    $var = $a[1][1];
                    echo " <a  class='text-dark' href='http://localhost/site_project/user/test.php?chooser=1'>
                                <h5 class='small'> <b> $var</b> </h5> </a>";
                    ?>
                            </div>
                            <br>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-sm-3">
                                <?php
                    $var2 = $a[2][3];
                    echo " <video  preload='metadata' height='72' width='85'>
                        <source src='/site_project/user/$var2' type='video/mp4'> </video> "
                    ?>
                            </div>
                            <div class="col-sm-4"> <br>
                                <?php
                    $var = $a[2][1];
                    echo " <a  class='text-dark' href='http://localhost/site_project/user/test.php?chooser=2'>
                                <h5 class='small'> <b> $var</b> </h5> </a>";
                    ?>
                            </div>
                            <br>
                        </div>

                        <br><br>
                        <h6 class="text-left small text-muted">CATEGORIE</h6>
                        <br>
                        <ul style="position: relative; right: 20px; font: italic bold 12px/30px Georgia, serif;">
                            <li>Sposa Collezioni</li>
                            <li>Sposo Collezioni</li>
                            <li>Moda Donna</li>
                            <li>Moda Uomo</li>
                            <li>Accessori</li>
                            <li>Real Wedding</li>
                            <li>Ispirazioni</li>
                            <li>Make Up</li>
                            <li>Hairstyle</li>
                            <li>Benessere</li>
                            <li>Home</li>
                            <li>Viaggi</li>
                            <li>Eventi</li>
                        </ul>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-1">
                                <img src="uploads/video_corellati_icon.png">
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2"> </div>
                    <div class="col-sm-2">
                        <img src="uploads/thumbnail_example.png" class="img-thumbnail">
                        <p> SUMMER FASHION 2018</p>
                    </div>
                    <div class="col-sm-2">
                        <img src="uploads/bag_example_icon.png" class="img-thumbnail">
                        <p> BAGS SPECIAL</p>
                    </div>
                </div>
            </div>

            <br><br><br><br>

            <div>
                <footer class="page-footer font-small white pt-4" style="background-color:#343434">

                    <div class="container">

                        <div class="row">
                            <div class="col-sm-2">
                                <img src="uploads/miasposa_white_icon.png" class="img-responsive">
                            </div>
                            <div class="col-sm-2"> </div>
                            <div class="col-sm-4">
                                <img src="uploads/pink_logo_icon2.png" style="">
                                <img src="uploads/si_logo_icon.png">
                            </div>
                            <div class="col-sm-4 ">
                                <img src="uploads/info_uploads.png" class="float-right">
                            </div>
                        </div>
                        <br>

                    </div>


                    <div class=" text-left py-2 container-fluid" style="background-color:#000000;color:white;">
                        <div class="container">
                            <div class="row">

                                <p class="col-sm-5"> <small>New Events srl - P.Iva 04042850612 - Via Nobel, Aversa (prov. di Caserta) </small> </p>
                                <div class="col-sm-7" align="right">
                                    <h5> io design agency </h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </footer>

            </div>

        </body>

        </html>
