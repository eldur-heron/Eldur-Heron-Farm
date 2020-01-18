<!DOCTYPE html>

<?php include '../includes/check-login.php'; ?>

<html lang="en">

<!--    HEAD      -->
<head>
    
<title>Eldur Heron Farm | Archives</title>

<?php include '../includes/head.php'; ?>
  
</head>

<body id="home-archives" data-spy="scroll" data-target=".navbar" data-offset="60">

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
                <li class="active"><a data-toggle="tab" href="#2019">2019</a></li>
                <li><a data-toggle="tab" href="#2018">2018</a></li>
                <li><a data-toggle="tab" href="#2017">2017</a></li>
                <li><a data-toggle="tab" href="#2016">2016</a></li>
            </ul>

            <div class="tab-content">

                <div id="2019" class="tab-pane fade in active">

                    <div class="row">
                        <div class="col-lg-12" style="padding: 20px;">

                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#2019photos">PHOTOS</a></li>
                                <li><a data-toggle="tab" href="#2019plans">PLANS</a></li>
                                <li><a data-toggle="tab" href="#2019records">RECORDS</a></li>
                            </ul>
                            
                            <div class="tab-content">
                                <div id="2019photos" class="tab-pane fade in active">
                                </div>
                                
                                <div id="2019plans" class="tab-pane fade">
                                </div>
                                
                                <div id="2019records" class="tab-pane fade">
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
                                <li class="active"><a data-toggle="tab" href="#2018photos">PHOTOS</a></li>
                                <li><a data-toggle="tab" href="#2018plans">PLANS</a></li>
                                <li><a data-toggle="tab" href="#2018records">RECORDS</a></li>
                            </ul>
                            
                            <div class="tab-content">
                                <div id="2018photos" class="tab-pane fade in active">
                                </div>
                                
                                <div id="2018plans" class="tab-pane fade">
                                </div>
                                
                                <div id="2018records" class="tab-pane fade">
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
                                <li class="active"><a data-toggle="tab" href="#2017photos">PHOTOS</a></li>
                                <li><a data-toggle="tab" href="#2017plans">PLANS</a></li>
                                <li><a data-toggle="tab" href="#2017records">RECORDS</a></li>
                            </ul>
                            
                            <div class="tab-content">
                                <div id="2017photos" class="tab-pane fade in active">
                                </div>
                                
                                <div id="2017plans" class="tab-pane fade">
                                </div>
                                
                                <div id="2017records" class="tab-pane fade">
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
                                <li class="active"><a data-toggle="tab" href="#2016photos">PHOTOS</a></li>
                                <li><a data-toggle="tab" href="#2016plans">PLANS</a></li>
                                <li><a data-toggle="tab" href="#2016records">RECORDS</a></li>
                            </ul>
                            
                            <div class="tab-content">
                                <div id="2016photos" class="tab-pane fade in active">
                                </div>
                                
                                <div id="2016plans" class="tab-pane fade">
                                </div>
                                
                                <div id="2016records" class="tab-pane fade">
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
