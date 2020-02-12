<!DOCTYPE html>

<?php include '../includes/check-login.php'; ?>

<?php include 'load-details.php'?>

<html lang="en">

<!--    HEAD      -->
<head>
    
<title>Eldur Heron Farm | Account</title>

<?php include '../includes/head.php'; ?>
        
</head>
    
<body id="home" data-spy="scroll" data-target=".navbar" data-offset="60">

<!--    nav bar     -->
<?php include '../includes/navbar-archives.php'; ?>

<div id="account" class="container-fluid">
    
    <div class="row">
        <div class="col-lg-12" style="text-align: right;">
            
            <a href="../account/logout.php">Logout</a>
            
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-12">
            <h2>Account Details</h2>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-4">
            Username:
        </div>
        <div class="col-sm-8">
            <?php echo $username; ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-4">
            Email:
        </div>
        <div class="col-sm-8">
            <?php echo $email; ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-4">
            Password:
        </div>
        <div class="col-sm-8">
            ************ &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="../account/reset-password.php">Reset</a>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-4">
            Privileges:
        </div>
        <div class="col-sm-8">
            <?php echo $privileges; ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-4">
            Last Login:
        </div>
        <div class="col-sm-8">
            <?php echo $lastLogin; ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-4">
            Last Updated:
        </div>
        <div class="col-sm-8">
            <?php echo $lastUpdated; ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-4">
            Created:
        </div>
        <div class="col-sm-8">
            <?php echo $created; ?>
        </div>
    </div>
    
</div>

<!-- Container (Footer Section) -->
<?php include '../includes/footer.php'; ?>

</body>
</html>