<?php

include "php/db/db_conn.inc.php"; //remember to change

$select = mysqli_query($conn, "SELECT `*` FROM `bet_tips`");
//$row = mysqli_num_rows($select);
$result = mysqli_fetch_assoc($select);
?>
    <div class="panel">
        <div class="panel-heading">
            <div class="panel-title">Betting Tips</div>
        </div>
        <div class="panel-body">
            <table class="table table-condensed table-bordered table-hover d-md-table-stiped">
                <tr>

                    <th>KICK OFF</th>
                    <th>HOME</th>
                    <th>AWAY</th>
                    <th>1</th>
                    <th>X</th>
                    <th>2</th>
                    <th>PICK</th>
                </tr>
                    <?php
                    while ($result){
                        echo "<tr>
                      
                        <td>".$result['kick_off']."</td>
                        <td>".$result['home_team'].'-'.$result['away_team']."</td><td>".$result['home']."</td>
                        <td>".$result['draw']."</td>
                        <td>".$result['away']."</td>
                        <td>".$result['pick']."</td>
                        </tr>";
                    }
                    ?>
            </table>
        </div>
    </div>
<?php
mysqli_close($conn);
?>