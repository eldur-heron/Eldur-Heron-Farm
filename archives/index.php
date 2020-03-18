<!DOCTYPE html>

<?php include '../includes/check-login.php'; ?>

<html lang="en">

<!--    HEAD      -->
<head>
    
<title>Eldur Heron Farm | Archives</title>

<?php include '../includes/head.php'; ?>
  
</head>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="60">

<!--    nav bar     -->
<?php include '../includes/navbar-archives.php'; ?>

<div id="archives" class="container-fluid">
    
    <div class="row">
        <div class="col-lg-12" style="text-align: right;">
            
            <?php if (isset($_SESSION['name'])) { echo $_SESSION['name'] . '&nbsp;&nbsp;&nbsp;'; } ?>
            <a href="../account/">Account</a> | <a href="../account/logout.php">Logout</a>
            
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#polestar">CORE</a></li>
                <li><a data-toggle="tab" href="#2020">2020</a></li>
                <li><a data-toggle="tab" href="#2019">2019</a></li>
                <li><a data-toggle="tab" href="#2018">2018</a></li>
                <li><a data-toggle="tab" href="#2017">2017</a></li>
                <li><a data-toggle="tab" href="#2016">2016</a></li>
            </ul>

            <div class="tab-content">
                
                <div id="polestar" class="tab-pane fade in active">

                    <div class="row">
                        
                        <div class="col-sm-3 col-md-2 col-lg-2" style="padding: 20px;">

                            <ul class="nav nav-tabs nav-stacked">
                                <li class="active"><a data-toggle="tab" href="#fields">Fields</a></li>
                                <li><a data-toggle="tab" href="#rotation">Rotation</a></li>
                                <li><a data-toggle="tab" href="#crops">Crops</a></li>
                                <li><a data-toggle="tab" href="#varieties">Varieties</a></li>
                                <li><a data-toggle="tab" href="#pMethods">Planting Methods</a></li>
                                <li><a data-toggle="tab" href="#equipment">Equipment</a></li>
                                <li><a data-toggle="tab" href="#inputs">Input Materials</a></li>
                                <li><a data-toggle="tab" href="#seedsources">Seed Sources</a></li>
                                <li><a data-toggle="tab" href="#seeder">Seeder Configurations</a></li>
                            </ul>

                        </div>
                        
                        <div class="col-sm-9 col-md-10 col-lg-10">
                            
                            <div class="tab-content">
                                
                                <div id="fields" class="tab-pane fade in active">
                                    <h1>FIELDS</h1>
                                    
                                    <div style="overflow-x: auto;">
                                        <table>
                                            <tr>
                                                <th>SEASON</th>                                        
                                                <th>LABEL</th>
                                                <th>LAT</th>
                                                <th>LON</th>
                                                <th>ORIENTATION</th>
                                                <th>W (m)</th>
                                                <th>L (m)</th>
                                                <th>AREA (sq m)</th>
                                            </tr>

                                            <?php 

                                            require('../includes/config-db.php');

                                            // setup SQL query
                                            $sql_query = "CALL `polestar`.`sp_GetAllFields`();";

                                            if ($results = $DB_CONN->query($sql_query)) {
                                                if ($results->num_rows > 0) {

                                                    while ($row = $results->fetch_array()) {
                                                        echo '<tr>';
                                                        echo '<td class="l">' . $row['season'] . '</td>';
                                                        echo '<td class="l">' . $row['label'] . '</td>';
                                                        echo '<td class="l">' . $row['lat'] . '</td>';
                                                        echo '<td class="l">' . $row['lon'] . '</td>';
                                                        echo '<td class="c">' . $row['orientation'] . '</td>';
                                                        echo '<td class="c">' . $row['W'] . '</td>';
                                                        echo '<td class="c">' . $row['L'] . '</td>';
                                                        echo '<td class="c">' . $row['A'] . '</td>';
                                                        echo '</tr>';
                                                    }

                                                }
                                            }

                                            // close DB connection
                                            $DB_CONN->close();
                                            ?>

                                        </table>
                                    </div>
                                    
                                </div>
                                
                                <div id="rotation" class="tab-pane fade">
                                    <h1>ROTATION</h1>
                                    
                                    <div style="overflow-x: auto;">
                                        <table>
                                            <tr>
                                                <th>#</th>                                        
                                                <th>Rotation</th>
                                                <th>Family (common)</th>
                                                <th>Family (scientific)</th>
                                            </tr>

                                            <?php 

                                            require('../includes/config-db.php');

                                            // setup SQL query
                                            $sql_query = "CALL `polestar`.`sp_GetAllRotations`();";

                                            if ($results = $DB_CONN->query($sql_query)) {
                                                if ($results->num_rows > 0) {

                                                    while ($row = $results->fetch_array()) {
                                                        echo '<tr>';
                                                        echo '<td class="c">' . $row['order'] . '</td>';
                                                        echo '<td class="l">' . $row['Rotation'] . '</td>';
                                                        echo '<td class="l">' . $row['common'] . '</td>';
                                                        echo '<td class="l">' . $row['scientific'] . '</td>';
                                                        echo '</tr>';
                                                    }

                                                }
                                            }

                                            // close DB connection
                                            $DB_CONN->close();
                                            ?>

                                        </table>
                                    </div>
                                    
                                </div>
                                
                                <div id="crops" class="tab-pane fade">
                                    <h1>CROPS</h1>
                                    
                                    <div style="overflow-x: auto;">
                                        <table>
                                            <tr>
                                                <th colspan="2">Crop</th>                                        
                                                <th>abbrv</th>
                                                <th>Rotation</th>
                                                <th>Growth Habit</th>
                                                <th>Support</th>
                                                <th>Earth Cover</th>
                                                <th>Air Cover</th>
                                                <th>Planting Method</th>
                                                <th colspan="2">Seeds per Gram</th>
                                                <th colspan="3">Soil Temp (&#8451;)</th>
                                                <th colspan="2"><abbr title="Days to Germination">DTG</abbr></th>
                                                <th colspan="2"><abbr title="Days to Transplant">DTT</abbr></th>
                                                <th>Within Row (cm)</th>
                                                <th>Between Row (cm)</th>
                                                <th>Sowing Depth (mm)</th>
                                                <th>Rows per Bed</th>
                                                <th>&nbsp;</th>
                                            </tr>

                                            <?php 

                                            require('../includes/config-db.php');

                                            // setup SQL query
                                            $sql_query = "CALL `polestar`.`sp_GetAllCrops`();";

                                            if ($results = $DB_CONN->query($sql_query)) {
                                                if ($results->num_rows > 0) {

                                                    while ($row = $results->fetch_array()) { ?>
                                            
                                                        <tr>
                                                            <td class="c">
                                                                <a data-toggle="modal" href="#crop_edit?id=<?php echo $row['id'];?>">edit</a>
                                                            </td>
                                                            <td class="l"><?php echo $row['crop'] ?></td>
                                                            <td class="c"><?php echo $row['abbrv'] ?></td>
                                                            <td class="l"><?php echo $row['rotation'] ?></td>
                                                            <td class="l"><?php echo $row['growth'] ?></td>
                                                            <td class="l"><?php echo $row['support'] ?></td>
                                                            <td class="l"><?php echo $row['earthCover'] ?></td>
                                                            <td class="l"><?php echo $row['airCover'] ?></td>
                                                            <td class="l"><?php echo $row['plantingMethod'] ?></td>
                                                            <td class="c"><?php echo $row['minSeedsPerGram'] ?></td>
                                                            <td class="c"><?php echo $row['maxSeedsPerGram'] ?></td>
                                                            <td class="c"><?php echo $row['minSoilTemp_C'] ?></td>
                                                            <td class="c"><?php echo $row['optSoilTemp_C'] ?></td>
                                                            <td class="c"><?php echo $row['maxSoilTemp_C'] ?></td>
                                                            <td class="c"><?php echo $row['dtg_min'] ?></td>
                                                            <td class="c"><?php echo $row['dtg_max'] ?></td>
                                                            <td class="c"><?php echo $row['dtt_min'] ?></td>
                                                            <td class="c"><?php echo $row['dtt_max'] ?></td>
                                                            <td class="c"><?php echo $row['withinRow_cm'] ?></td>
                                                            <td class="c"><?php echo $row['betweenRow_cm'] ?></td>
                                                            <td class="c"><?php echo $row['sowingDepth_mm'] ?></td>
                                                            <td class="c"><?php echo $row['noRowsPerBed'] ?></td>
                                                            <td class="c">
                                                                <a data-toggle="modal" href="#crop_del?id=<?php echo $row['id'];?>">X</a>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }

                                                }
                                            }

                                            // close DB connection
                                            $DB_CONN->close();
                                            ?>

                                        </table>
                                    </div>
                                    
                                    <div id="crop_edit" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            
                                            <div class="modal-content">
                                                
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Crop</h4>
                                                </div>
                                                
                                                <div class="modal-body">
                                                    <h4>[Crop Data]</h4>
                                                </div>
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                                </div>                                                
                                                
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div id="varieties" class="tab-pane fade">
                                    <h1>VARIETIES</h1>
                                </div>
                                
                                <div id="pMethods" class="tab-pane fade">
                                    <h1>PLANTING METHODS</h1>
                                </div>
                                
                                <div id="equipment" class="tab-pane fade">
                                    <h1>EQUIPMENT</h1>
                                </div>
                                
                                <div id="inputs" class="tab-pane fade">
                                    <h1>INPUT MATERIALS</h1>
                                </div>
                                
                                <div id="seedsources" class="tab-pane fade">
                                    <h1>SEED SOURCES</h1>
                                </div>
                                
                                <div id="seeder" class="tab-pane fade">
                                    <h1>SEEDER CONFIGURATIONS</h1>
                                </div>
                                
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>

                <div id="2020" class="tab-pane fade">

                    <div class="row">
                        
                        <div class="col-sm-3 col-md-3 col-lg-3" style="padding: 20px;">

                            <ul class="nav nav-tabs nav-stacked">
                                <li class="active"><a data-toggle="tab" href="#2020wobs">Weather Observations</a></li>
                                <li><a data-toggle="tab" href="#2020pobs">Phenological Observations</a></li>
                                <li class="dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Map <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a data-toggle="tab" href="#2020pmap">Planned</a></li>
                                        <li><a data-toggle="tab" href="#2020rmap">Recorded</a></li>
                                    </ul>
                                </li>
                                <li><a data-toggle="tab" href="#2020activity">Activity</a></li>
                                <li><a data-toggle="tab" href="#2020plantings">Plantings</a></li>
                                <li><a data-toggle="tab" href="#2020harvests">Harvests</a></li>
                                <li><a data-toggle="tab" href="#2020sales">Sales</a></li>
                                <li><a data-toggle="tab" href="#2020pests">Pests</a></li>
                                <li><a data-toggle="tab" href="#2020inputs">Inputs</a></li>
                                <li><a data-toggle="tab" href="#2020seedsearch">Seed Search</a></li>
                            </ul>

                        </div>
                        
                        <div class="col-sm-9 col-md-9 col-lg-9">
                            
                            <div class="tab-content">
                                
                                <div id="2020wobs" class="tab-pane fade in active">
                                    <h1>WEATHER OBSERVATIONS</h1>
                                </div>
                                
                                <div id="2020pobs" class="tab-pane fade">
                                    <h1>PHENOLOGY</h1>
                                </div>
                                
                                <div id="2020pmap" class="tab-pane fade">
                                    <h1>PLANNED MAP</h1>
                                </div>
                                
                                <div id="2020rmap" class="tab-pane fade">
                                    <h1>RECORDED MAP</h1>
                                </div>
                                
                                <div id="2020activity" class="tab-pane fade">
                                    <h1>ACTIVITY</h1>
                                </div>
                                
                                <div id="2020plantings" class="tab-pane fade">
                                    <h1>PLANTINGS</h1>
                                </div>
                                
                                <div id="2020harvests" class="tab-pane fade">
                                    <h1>HARVESTS</h1>
                                </div>
                                
                                <div id="2020sales" class="tab-pane fade">
                                    <h1>SALES</h1>
                                </div>
                                
                                <div id="2020pests" class="tab-pane fade">
                                    <h1>PESTS</h1>
                                </div>
                                
                                <div id="2020inputs" class="tab-pane fade">
                                    <h1>INPUTS</h1>
                                </div>
                                
                                <div id="2020seedsearch" class="tab-pane fade">
                                    <h1>SEED SEARCH</h1>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>

                <div id="2019" class="tab-pane fade">

                    <div class="row">
                        <div class="col-lg-12" style="padding: 20px;">
                            
                        </div>        
                    </div>

                </div>

                <div id="2018" class="tab-pane fade">

                    <div class="row">
                        <div class="col-lg-12" style="padding: 20px;">
                            
                        </div>        
                    </div>

                </div>

                <div id="2017" class="tab-pane fade">

                    <div class="row">
                        <div class="col-lg-12" style="padding: 20px;">
                            
                        </div>        
                    </div>

                </div>

                <div id="2016" class="tab-pane fade">

                    <div class="row">
                        <div class="col-lg-12" style="padding: 20px;">
                            
                        </div>        
                    </div>

                </div>

            </div>
            
        </div>        
    </div>
    
</div>

<!-- Container (Footer Section) -->
<?php include '../includes/footer.php'; ?>

</body>
</html>
