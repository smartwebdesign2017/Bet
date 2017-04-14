<div class="col-lg-3 col-md-3 col-sm-12">
    <div class="panel side space">
        <div class="panel-heading">
            <h6 class="panel-title">RESULTS</h6>
        </div>
        <div class="panel-body accordion_body">
            <div id="accordion_results">
                <h3><a href="#"><i class="fa fa-soccer-ball-o"></i>&emsp;English Premier League</a></h3>
                <div id="accordion_table">
                    <?php
                    //include "php/db/db_con.inc.php";

                    $select = mysqli_query($conn, "SELECT `*` FROM `bet_results`");
                    $row = mysqli_num_rows($select);
                    ?>

                    <table class="table table-striped table-condensed table-bordered table-hover">
                        <tr class="text-center">
                            <th class="text-center">#</th>
                            <th class="text-center">TEAM</th>
                            <th class="text-center">P</th>
                            <th class="text-center">W</th>
                            <th class="text-center">D</th>
                            <th class="text-center">L</th>
                            <th class="text-center">GD</th>
                            <th class="text-center">PTS</th>
                        </tr>
                        <?php
                        while ($result = mysqli_fetch_assoc($select)){
                            echo "<tr class='text-center'>
                        <td>".$result['id']."</td>
                        <td>".$result['team']."</td>
                        <td>".$result['p']."</div>
                        <td>".$result['w']."</td>
                        <td>".$result['d']."</td>
                        <td>".$result['l']."</td>
                        <td>".$result['gd']."</td>
                        <td>".$result['pts']."</td>
                        </tr>";
                        }
                        ?>
                    </table>
                </div>
                <h3><a href="#"><i class="fa fa-soccer-ball-o"></i>&emsp;UEFA Champions League</a></h3>
                <div>Second Description</div>
                <h3><a href="#"><i class="fa fa-soccer-ball-o"></i>&emsp;England League Championship</a></h3>
                <div>Third Description</div>
                <h3><a href="#"><i class="fa fa-soccer-ball-o"></i>&emsp;French League 1</a></h3>
                <div>Fourth Description</div>
                <h3><a href="#"><i class="fa fa-soccer-ball-o"></i>&emsp;Kenya Premier League</a></h3>
                <div>Fourth Description</div>
            </div>
        </div>
    </div>
    <div class="panel side space">
        <div class="panel-heading">
            <h6 class="panel-title">FIXTURES</h6>
        </div>
        <div class="panel-body accordion_body">
            <div id="accordion_fixtures">
                <h3><a href="#"><i class="fa fa-soccer-ball-o"></i>&emsp;English Premier League</a></h3>
                <div>First Description</div>
                <h3><a href="#"><i class="fa fa-soccer-ball-o"></i>&emsp;UEFA Champions League</a></h3>
                <div>Second Description</div>
                <h3><a href="#"><i class="fa fa-soccer-ball-o"></i>&emsp;England League Championship</a></h3>
                <div>Third Description</div>
                <h3><a href="#"><i class="fa fa-soccer-ball-o"></i>&emsp;French League 1</a></h3>
                <div>Fourth Description</div>
                <h3><a href="#"><i class="fa fa-soccer-ball-o"></i>&emsp;Kenya Premier League</a></h3>
                <div>Fourth Description</div>
            </div>
        </div>
    </div>
</div>