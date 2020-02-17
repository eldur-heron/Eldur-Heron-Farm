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
                        
                        <div class="col-sm-3 col-md-3 col-lg-3" style="padding: 20px;">

                            <ul class="nav nav-tabs nav-stacked">
                                <li class="active"><a data-toggle="tab" href="#fields">Fields</a></li>
                                <li><a data-toggle="tab" href="#rotation">Rotation</a></li>
                                <li><a data-toggle="tab" href="#families">Families</a></li>
                                <li><a data-toggle="tab" href="#crops">Crops</a></li>
                                <li><a data-toggle="tab" href="#varieties">Varieties</a></li>
                                <li><a data-toggle="tab" href="#pMethods">Planting Methods</a></li>
                                <li><a data-toggle="tab" href="#equipment">Equipment</a></li>
                                <li><a data-toggle="tab" href="#inputs">Input Materials</a></li>
                                <li><a data-toggle="tab" href="#seedsources">Seed Sources</a></li>
                                <li><a data-toggle="tab" href="#seeder">Seeder Configurations</a></li>
                            </ul>

                        </div>
                        
                        <div class="col-sm-9 col-md-9 col-lg-9">
                            
                            <div class="tab-content">
                                
                                <div id="fields" class="tab-pane fade in active">
                                    <h1>FIELDS</h1>
                                </div>
                                
                                <div id="rotation" class="tab-pane fade">
                                    <h1>ROTATION</h1>
                                </div>
                                
                                <div id="families" class="tab-pane fade">
                                    <h1>FAMILIES</h1>
                                </div>
                                
                                <div id="crops" class="tab-pane fade">
                                    <h1>CROPS</h1>
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
                                <li class="active"><a data-toggle="tab" href="2020wobs">Weather Observations</a></li>
                                <li><a data-toggle="tab" href="2020pobs">Phenological Observations</a></li>
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
                                    <h1>PHENOLOGICAL OBSERVATIONS</h1>
                                </div>
                                
                                <div id="2020pmap" class="tab-pane fade">
                                    <h1>PLANNED MAP</h1>
                                </div>
                                
                                <div id="2020rmap" class="tab-pane fade">
                                    <h1>RECORDED MAP</h1>
                                </div>
                                
                                <div id="2020activity" class="tab-pane fade">
                                    <h1>ACTIVITY LOG</h1>
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
                                    <h1>INPUT LOG</h1>
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
