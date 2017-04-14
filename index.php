<?php
/*session_start();
if(isset($_SESSION['username'])){
    header("Location: pages/bet_slip");
}*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bet</title>
    <link rel="stylesheet" href="frameworks/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="frameworks/Bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="frameworks/Bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="frameworks/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="frameworks/w3css/w3css.css">
    <link rel="stylesheet" href="frameworks/animate/animate.min.css">
    <link rel="stylesheet" href="frameworks/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="frameworks/jquery-ui/jquery-ui.structure.min.css">
    <link rel="stylesheet" href="frameworks/jquery-ui/jquery-ui.theme.min.css">
    <link rel="stylesheet" href="frameworks/fa/css/font-awesome.min.css">
    <link rel="stylesheet" href="frameworks/lightbox/dist/css/lightbox.min.css">
    <link rel="stylesheet" href="frameworks/Hover/css/hover-min.css">
    <link rel="stylesheet" href="frameworks/circliful/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script type="text/javascript" src="frameworks/modernizr/modernizr.js"></script>
</head>
<body>
<!-- include navigation bar -->
<?php include "includes/nav.inc.php"; ?>
<div class="container-fluid" id="content">

    <!-- register modal -->
    <div class="modal fade" id="bet_register">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h6>Please fill all the fields to register.</h6>
                    <button role="button" class="close" data-dismiss="modal"><i class="fa fa-times-circle text-danger"></i></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form class="form-horizontal" id="register_form">
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div id="alert_reg"></div>
                                    <div class="form-group">
                                        <label for="name" class="control-label col-lg-12 col-md-12 col-sm-12">Name:</label>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="text" class="form-control" id="name" name="name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="control-label col-lg-12 col-md-12 col-sm-12">Username:</label>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="text" class="form-control" id="username" name="username">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="control-label col-lg-12 col-md-12 col-sm-12">Email:</label>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="phone" class="control-label col-lg-12 col-md-12 col-sm-12">Phone:</label>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="text" class="form-control" id="phone" name="phone">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pin" class="control-label col-lg-12 col-md-12 col-sm-12">PIN:</label>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="password" class="form-control" id="pin" name="pin">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cpin" class="control-label col-lg-12 col-md-12 col-sm-12">Confirm PIN:</label>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <input type="password" class="form-control" id="cpin" name="cpin">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <button class="btn btn-success" role="button" type="button" id="register_user">REGISTER</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- include left menu -->
        <?php include "includes/left_menu.inc.php"; ?>

        <!-- main content -->
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="row">
                <div class="carousel slider" data-ride="carousel" id="myCarousel">
                    <!-- indicators -->
                    <ol class="carousel-indicators">
                        <li class="active" data-slide-to="0" data-target="#myCarousel"></li>
                        <li class="active" data-slide-to="1" data-target="#myCarousel"></li>
                        <li class="active" data-slide-to="2" data-target="#myCarousel"></li>
                        <li class="active" data-slide-to="3" data-target="#myCarousel"></li>
                    </ol>
                    <!-- wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="img/soccer/arsenal.jpg" height="350px" width="100%" alt="Image">
                            <div class="carousel-caption">
                               <h4>Tomorrow's Games </h4>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/soccer/gettyimages-edenhazard.jpg" height="350px" width="100%" alt="Image">
                            <div class="carousel-caption" id="news">
                                <div class="panel pull-left side">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">NEWS</h4>
                                    </div>
                                    <div class="panel-body lgi">
                                        <a href="#" class="list-group-item">Arsenal Vs Liverpool</a>
                                        <a href="#" class="list-group-item">Chelsea Vs Manchester United</a>
                                        <a href="#" class="list-group-item">Everton Vs Tottenham</a>
                                        <a href="#" class="list-group-item">Arsenal Vs Liverpool</a>
                                        <a href="#" class="list-group-item">Chelsea Vs Manchester United</a>
                                        <a href="#" class="list-group-item">Everton Vs Tottenham</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/soccer/LionelMessiBarcelona.jpg" height="350px" width="100%" alt="Image">
                            <div class="carousel-caption">
                                <h4>TODAY'S GAMES</h4>
                                <p>We develop responsive websites, that can adapt to any device size.</p>
                                <!--<button class="btn btn-large btn-success">Call Me</button>-->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="img/soccer/Manchester-United.jpg" height="350px" width="100%" alt="Image">
                            <div class="carousel-caption">
                                <h4>TODAY'S GAMES</h4>
                                <p>We develop responsive websites, that can adapt to any device size.</p>
                                <!--<button class="btn btn-large btn-success">Call Me</button>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php

                include "php/db/db_conn.inc.php"; //remember to change

                $select = mysqli_query($conn, "SELECT `*` FROM `bet_tips`");
                $row = mysqli_num_rows($select);
                ?>
                <div class="panel panel-danger side prediction">
                    <div class="panel-heading">
                        <h6 class="panel-title">BETTING TIPS <small class="pull-right">TODAY'S GAMES</small></h6>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-condensed table-bordered table-hover">
                            <tr>
                                <th  class="text-center">#</th>
                                <th  class="text-center">KICK OFF</th>
                                <th  class="text-center">TEAM</th>
                                <th  class="text-center">1</th>
                                <th  class="text-center">X</th>
                                <th  class="text-center">2</th>
                                <th  class="text-center">PICK</th>
                            </tr>
                            <?php
                            while ($result = mysqli_fetch_assoc($select)){
                                echo "<tr class='text-center'>
                        <td>".$result['id']."</td>
                        <td>".$result['kick_off']."</td>
                        <td>".$result['home_team'].'&emsp;-&emsp;'.$result['away_team']."</td><td>".$result['home']."</td>
                        <td>".$result['draw']."</td>
                        <td>".$result['away']."</td>
                        <td>".$result['pick']."</td>
                        </tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- include right menu -->
        <?php include "includes/right_menu.inc.php"; ?>
    </div>
</div>

<!-- include footer -->
<?php include "includes/footer.inc.php"; ?>
<?php mysqli_close($conn); ?>
<script type="text/javascript" src="frameworks/jQuery/jquery-3.0.0.min.js"></script>
<script type="text/javascript" src="frameworks/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="frameworks/Bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="frameworks/WOW/dist/wow.min.js"></script>
<script type="text/javascript" src="frameworks/circliful/js/jquery.circliful.min.js"></script>
<script type="text/javascript" src="frameworks/moment/moment-with-locales.min.js"></script>
<script type="text/javascript" src="frameworks/Chart/src/chart.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>