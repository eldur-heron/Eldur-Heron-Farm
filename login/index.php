<!DOCTYPE html>
<html lang="en">

<!--    HEAD      -->
<head>
    
<title>Eldur Heron Farm | Login</title>

<?php include '../includes/head.php'; ?>
    
<link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link rel="stylesheet" type="text/css" href="../includes/style-login.css">
        
</head>
    
<body id="home-login" data-spy="scroll" data-target=".navbar" data-offset="60">

<!--    nav bar     -->
<?php include '../includes/navbar-login.php'; ?>

<br>
<br>

<div id="login" class="container-fluid">

    <div class="row">
        <div class="col-lg-12">
            <div class="login">
                
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Login</h1>
                    </div>
                </div>
<!--  REMOVE option from public
                <div class="row">
                    <div class="col-lg-12" style="text-align: center;">
                        <a href="../register/">Register</a>
                    </div>
                </div>-->
                <div class="row">
                    <div class="col-lg-12">                
                        <form action="authenticate.php" method="post" autocomplete="off">

                            <label for="username">
                                <i class="fas fa-user"></i>
                            </label>
                            <input type="text" name="username" placeholder="Username" id="username" required>

                            <label for="password">
                                <i class="fas fa-lock"></i>
                            </label>
                            <input type="password" name="password" placeholder="Password" id="password" required>

                            <input type="submit" value="Login">

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
