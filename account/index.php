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
            <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#changepw">
                Change
            </button>
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

    <div id="changepw" class="modal fade" role="dialog" style="margin-top: 10%;">
        <div class="modal-dialog">

            <div class="modal-content">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        &times;
                    </button>
                    <h4>Change Password</h4>
                </div>

                <div class="modal-body">
                    <form action="changepw.php" method="POST">

                        <div class="form-group">

                            <label for="oldpw">Old Password:</label>

                            <input type="password" class="form-control" id="oldpw">

                        </div>

                        <div class="form-group">

                            <label for="oldpw">New Password:</label>

                            <input type="password" class="form-control" id="newpw1">

                        </div>

                        <button type="submit" class="btn btn-default" data-dismiss="modal">
                            Change
                        </button>            

                        <button type="reset" class="btn btn-default">
                            Reset
                        </button>

                    </form>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">
                        Cancel
                    </button>

                </div>

            </div>

        </div>

    </div>
    
</div>

<!-- Container (Footer Section) -->
<?php include '../includes/footer.php'; ?>

</body>
</html>