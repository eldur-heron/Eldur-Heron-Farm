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
                <li class="active"><a data-toggle="tab" href="#polestar">CORE (polestar)</a></li>
                <li><a data-toggle="tab" href="#2019">2019 (corvus)</a></li>
                <li><a data-toggle="tab" href="#2018">2018 (leo)</a></li>
                <li><a data-toggle="tab" href="#2017">2017 (cancer)</a></li>
                <li><a data-toggle="tab" href="#2016">2016 (sirius)</a></li>
            </ul>

            <div class="tab-content">
                
                <div id="polestar" class="tab-pane fade in active">
                    
                    <div class="row">
                        <div class="col-lg-12" style="padding: 20px;">
                            
                            
                            
                        </div>
                    </div>
                    
                </div>

                <div id="2019" class="tab-pane fade">

                    <div class="row">
                        <div class="col-lg-12" style="padding: 20px;">

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#2019rmap">Recorded Map</a></li>
                                <li><a data-toggle="tab" href="#2019pmap">Planned Map</a></li>
                                <li><a data-toggle="tab" href="#2019activity">Activity</a></li>
                                <li><a data-toggle="tab" href="#2019inputs">Inputs</a></li>
                                <li><a data-toggle="tab" href="#2019plantings">Plantings</a></li>
                                <li><a data-toggle="tab" href="#2019harvests">Harvests</a></li>
                                <li><a data-toggle="tab" href="#2019sales">Sales</a></li>
                                <li><a data-toggle="tab" href="#2019pests">Pests</a></li>
                                <li><a data-toggle="tab" href="#2019seedsearch">Seed Search</a></li>
                            </ul>
                            
                            <div class="tab-content">
                                
                                <div id="2019rmap" class="tab-pane fade in active">
                                </div>
                                
                                <div id="2019pmap" class="tab-pane fade">
                                </div>
                                
                                <div id="2019activity" class="tab-pane fade">
                                </div>
                                
                                <div id="2019inputs" class="tab-pane fade">
                                </div>
                                
                                <div id="2019plantings" class="tab-pane fade">
                                </div>
                                
                                <div id="2019harvests" class="tab-pane fade">
                                </div>
                                
                                <div id="2019sales" class="tab-pane fade">
                                </div>
                                
                                <div id="2019pests" class="tab-pane fade">
                                </div>
                                
                                <div id="2019seedsearch" class="tab-pane fade">
                                </div>
                            </div>

                        </div>        
                    </div>

                    <!--    under construction banner-->
                    <?php include '../includes/under-construction.php'; ?>

                </div>

                <div id="2018" class="tab-pane fade">

                    <div class="row">
                        <div class="col-lg-12" style="padding: 20px;">

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#2018rmap">Recorded Map</a></li>
                                <li><a data-toggle="tab" href="#2018pmap">Planned Map</a></li>
                                <li><a data-toggle="tab" href="#2018activity">Activity</a></li>
                                <li><a data-toggle="tab" href="#2018inputs">Inputs</a></li>
                                <li><a data-toggle="tab" href="#2018plantings">Plantings</a></li>
                                <li><a data-toggle="tab" href="#2018harvests">Harvests</a></li>
                                <li><a data-toggle="tab" href="#2018sales">Sales</a></li>
                                <li><a data-toggle="tab" href="#2018pests">Pests</a></li>
                                <li><a data-toggle="tab" href="#2018seedsearch">Seed Search</a></li>
                            </ul>
                            
                            <div class="tab-content">
                                
                                <div id="2018rmap" class="tab-pane fade in active">
                                </div>
                                
                                <div id="2018pmap" class="tab-pane fade">
                                </div>
                                
                                <div id="2018activity" class="tab-pane fade">
                                </div>
                                
                                <div id="2018inputs" class="tab-pane fade">
                                </div>
                                
                                <div id="2018plantings" class="tab-pane fade">
                                </div>
                                
                                <div id="2018harvests" class="tab-pane fade">
                                </div>
                                
                                <div id="2018sales" class="tab-pane fade">
                                </div>
                                
                                <div id="2018pests" class="tab-pane fade">
                                </div>
                                
                                <div id="2018seedsearch" class="tab-pane fade">
                                </div>
                            </div>

                        </div>        
                    </div>

                    <!--    under construction banner-->
                    <?php include '../includes/under-construction.php'; ?>

                </div>

                <div id="2017" class="tab-pane fade">

                    <div class="row">
                        <div class="col-lg-12" style="padding: 20px;">

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#2017rmap">Recorded Map</a></li>
                                <li><a data-toggle="tab" href="#2017pmap">Planned Map</a></li>
                                <li><a data-toggle="tab" href="#2017activity">Activity</a></li>
                                <li><a data-toggle="tab" href="#2017inputs">Inputs</a></li>
                                <li><a data-toggle="tab" href="#2017plantings">Plantings</a></li>
                                <li><a data-toggle="tab" href="#2017harvests">Harvests</a></li>
                                <li><a data-toggle="tab" href="#2017sales">Sales</a></li>
                                <li><a data-toggle="tab" href="#2017pests">Pests</a></li>
                                <li><a data-toggle="tab" href="#2017seedsearch">Seed Search</a></li>
                            </ul>
                            
                            <div class="tab-content">
                                
                                <div id="2017rmap" class="tab-pane fade in active">
                                </div>
                                
                                <div id="2017pmap" class="tab-pane fade">
                                </div>
                                
                                <div id="2017activity" class="tab-pane fade">
                                </div>
                                
                                <div id="2017inputs" class="tab-pane fade">
                                </div>
                                
                                <div id="2017plantings" class="tab-pane fade">
                                </div>
                                
                                <div id="2017harvests" class="tab-pane fade">
                                </div>
                                
                                <div id="2017sales" class="tab-pane fade">
                                </div>
                                
                                <div id="2017pests" class="tab-pane fade">
                                </div>
                                
                                <div id="2017seedsearch" class="tab-pane fade">
                                </div>
                            </div>

                        </div>        
                    </div>

                    <!--    under construction banner-->
                    <?php include '../includes/under-construction.php'; ?>

                </div>

                <div id="2016" class="tab-pane fade">

                    <div class="row">
                        <div class="col-lg-12" style="padding: 20px;">

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#2016rmap">Recorded Map</a></li>
                                <li><a data-toggle="tab" href="#2016pmap">Planned Map</a></li>
                                <li><a data-toggle="tab" href="#2016activity">Activity</a></li>
                                <li><a data-toggle="tab" href="#2016inputs">Inputs</a></li>
                                <li><a data-toggle="tab" href="#2016plantings">Plantings</a></li>
                                <li><a data-toggle="tab" href="#2016harvests">Harvests</a></li>
                                <li><a data-toggle="tab" href="#2016sales">Sales</a></li>
                                <li><a data-toggle="tab" href="#2016pests">Pests</a></li>
                                <li><a data-toggle="tab" href="#2016seedsearch">Seed Search</a></li>
                            </ul>
                            
                            <div class="tab-content">
                                
                                <div id="2016rmap" class="tab-pane fade in active">
                                </div>
                                
                                <div id="2016pmap" class="tab-pane fade">
                                </div>
                                
                                <div id="2016activity" class="tab-pane fade">
                                </div>
                                
                                <div id="2016inputs" class="tab-pane fade">
                                </div>
                                
                                <div id="2016plantings" class="tab-pane fade">
                                </div>
                                
                                <div id="2016harvests" class="tab-pane fade">
                                </div>
                                
                                <div id="2016sales" class="tab-pane fade">
                                </div>
                                
                                <div id="2016pests" class="tab-pane fade">
                                </div>
                                
                                <div id="2016seedsearch" class="tab-pane fade">
                                </div>
                            </div>

                        </div>        
                    </div>

                    <!--    under construction banner-->
                    <?php include '../includes/under-construction.php'; ?>

                </div>

            </div>
            
        </div>        
    </div>
    
</div>

<!-- Container (Footer Section) -->
<?php include '../includes/footer.php'; ?>

</body>
</html>
