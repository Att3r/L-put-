<?php
include 'templates/header.php';
include 'settings.php';

//show($test[0]->main->temp);
//show($test[0]);

//show(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[0]->dt));

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?php
            include 'templates/navbar.php'
            ?>
            <div class="row text-center">
                <h3><?php echo $test[0]->name . ' ' . $myDate; ?></h3>
            </div>

            <div class="col text-center ">
                <Table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Temperatuur</th>
                            <th>Tajutav</th>
                            <th>Tuule suund</th>
                            <th>Tuule kiirus</th>
                            <th>Pilved</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td><?php echo $test[0]->main->temp ?>°C</td>
                        <td><?php echo $test[0]->main->feels_like ?>°C</td>
                        <td><?php echo $test[0]->wind->deg ?>°</td>
                        <td><?php echo $test[0]->wind->speed ?>m/s</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $test[0]->weather[0]->description ?></td>
                    </tbody>
                    <thead>
                        <tr>
                            <th>Pilvisus</th>
                            <th>Õhurõhk</th>
                            <th>Õhuniiskus</th>
                            <th>Päike tõuseb</th>
                            <th>Päike loojub</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td><?php echo $test[0]->clouds->all ?>%</td>
                        <td><?php echo $test[0]->main->pressure  ?> hPa</td>
                        <td><?php echo $test[0]->main->humidity  ?>%</td>
                        <td><?php echo $sunrise ?></td>
                        <td><?php echo $sunset ?></td>
                    </tbody>
                </Table>
                <div class="row text-center">
                <h3>Prognoos 24h</h3>
            </div>

            <div class="col text-center ">
                <Table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Temperatuur</th>
                            <th>Miinimum</th>
                            <th>Maksimum</th>
                            <th>Õhurõhk</th>
                            <th>Õhuniiskus</th>
                            <th>Pilved</th>
                            <th>Aeg</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td><?php echo $forecast[0]->hourly[0]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[0]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[0]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[0]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[0]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[0]->weather[0]->description ?></td>
                        <td><?php echo $fdate ?></td>
                        </tr>
                        <tr>
                        <td><?php echo $forecast[0]->hourly[1]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[1]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[1]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[1]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[1]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[1]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[1]->dt) ?></td>
                        </tr>
                        <tr>
                        <td><?php echo $forecast[0]->hourly[2]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[2]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[2]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[2]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[2]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[2]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[2]->dt) ?></td>
                        </tr>
                        <tr>
                        <td><?php echo $forecast[0]->hourly[3]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[3]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[3]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[3]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[3]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[3]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[3]->dt) ?></td>
                        </tr>
                        <td><?php echo $forecast[0]->hourly[4]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[4]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[4]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[4]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[4]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[4]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[4]->dt) ?></td>
                        </tr>
                        <tr>
                        <td><?php echo $forecast[0]->hourly[5]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[5]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[5]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[5]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[5]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[5]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[5]->dt) ?></td>
                        </tr>
                        <tr>
                        <td><?php echo $forecast[0]->hourly[6]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[6]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[6]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[6]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[6]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[6]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[6]->dt) ?></td>
                        </tr>
                        <tr>
                        <td><?php echo $forecast[0]->hourly[7]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[7]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[7]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[7]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[7]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[7]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[7]->dt) ?></td>
                        </tr>
                        <tr>
                        <td><?php echo $forecast[0]->hourly[8]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[8]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[8]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[8]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[8]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[8]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[8]->dt) ?></td>
                        </tr>
                        <td><?php echo $forecast[0]->hourly[9]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[9]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[9]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[9]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[9]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[9]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[9]->dt) ?></td>
                        </tr>
                        <tr>
                        <td><?php echo $forecast[0]->hourly[10]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[10]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[10]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[10]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[10]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[10]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[10]->dt) ?></td>
                        </tr>
                        <tr>
                        <td><?php echo $forecast[0]->hourly[11]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[11]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[11]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[11]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[11]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[11]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[11]->dt) ?></td>
                        </tr>
                        <td><?php echo $forecast[0]->hourly[12]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[12]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[12]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[12]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[12]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[12]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[12]->dt) ?></td>
                        </tr>
                        <tr>
                        <td><?php echo $forecast[0]->hourly[13]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[13]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[13]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[13]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[13]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[13]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[13]->dt) ?></td>
                        </tr>
                        <tr>
                        <td><?php echo $forecast[0]->hourly[14]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[14]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[14]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[14]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[14]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[14]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[14]->dt) ?></td>
                        </tr>
                        <td><?php echo $forecast[0]->hourly[15]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[15]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[15]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[15]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[15]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[15]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[15]->dt) ?></td>
                        </tr>
                        <tr>
                        <td><?php echo $forecast[0]->hourly[16]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[16]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[16]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[16]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[16]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[16]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[16]->dt) ?></td>
                        </tr>
                        <tr>
                        <td><?php echo $forecast[0]->hourly[17]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[17]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[17]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[17]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[17]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[18]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[18]->dt) ?></td>
                        </tr>
                        <tr>
                        <td><?php echo $forecast[0]->hourly[19]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[19]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[19]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[19]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[19]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[19]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[19]->dt) ?></td>
                        </tr>
                        <tr>
                        <td><?php echo $forecast[0]->hourly[20]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[20]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[20]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[20]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[20]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[20]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[20]->dt) ?></td>
                        </tr>
                        <td><?php echo $forecast[0]->hourly[21]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[21]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[21]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[21]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[21]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[21]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[21]->dt) ?></td>
                        </tr>
                        <tr>
                        <td><?php echo $forecast[0]->hourly[22]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[22]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[22]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[22]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[22]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[22]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[22]->dt) ?></td>
                        </tr>
                        <tr>
                        <td><?php echo $forecast[0]->hourly[23]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[23]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[23]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[23]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[23]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[23]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[23]->dt) ?></td>
                        </tr><tr>
                        <td><?php echo $forecast[0]->hourly[24]->temp ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[24]->dt)) { echo ($forecast[0]->daily[0]->temp->min);} else { echo ($forecast[0]->daily[1]->temp->min); } ?>°C</td>
                        <td><?php if(date('d.m.Y') == date('d.m.Y', $forecast[0]->hourly[24]->dt)) { echo ($forecast[0]->daily[0]->temp->max);} else { echo ($forecast[0]->daily[1]->temp->max); } ?>°C</td>
                        <td><?php echo $forecast[0]->hourly[24]->pressure ?>hPA</td>
                        <td><?php echo $forecast[0]->hourly[24]->humidity ?>%</td>
                        <td><?php echo '<img src="data:image/jpeg;base64,' . $imageData . '">' . ' ' . $forecast[0]->hourly[24]->weather[0]->description ?></td>
                        <td><?php echo $fdate = date('d.m.Y H:i:s', $forecast[0]->hourly[24]->dt) ?></td>
                        </tr>
                    </tbody>
                    
                </Table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <?php
    include 'templates/footer.php'
    ?>