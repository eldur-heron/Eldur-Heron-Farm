<!DOCTYPE html>
<html lang="en">

<!--    HEAD      -->
<head>
    
<title>Eldur Heron Farm | Register</title>

<?php include '../includes/head.php'; ?>
    
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link rel="stylesheet" type="text/css" href="../includes/style-login.css">
        
</head>
    
<body id="home-register" data-spy="scroll" data-target=".navbar" data-offset="60">

<!--    nav bar     -->
<?php include '../includes/navbar-login.php'; ?>

<div id="register" class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <div class="register">
                
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Register</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" style="text-align: center;">
                        <a href="../login/">Login</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="register.php" method="post" autocomplete="off">
                            <div class="row">                                
                                <div class="col-sm-2">
                                    <label for="username">
                                        <i class="fas fa-user"></i>
                                    </label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" name="username" placeholder="Username" id="username" required>
                                </div>
                            </div>

                            <div class="row">                                
                                <div class="col-sm-2">
                                    <label for="password">
                                        <i class="fas fa-lock"></i>
                                    </label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="password" name="password" placeholder="Password" id="password" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-2">
                                    <label for="email">
                                        <i class="fas fa-envelope">



                                        </i>                                    
                                    </label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="email" name="email" placeholder="Email" id="email" required>                                
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-10">
                                    <label for="accepted">
                                        <a href="../terms.php" target="_blank"></a>                                    
                                    </label>
                                </div>
                                <div class="col-sm-2">
                                    <input type="checkbox" name="accepted" id="accepted" required>                               
                                </div>
                            </div>
                            
                            <input type="submit" value="Register">

                        </form>
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