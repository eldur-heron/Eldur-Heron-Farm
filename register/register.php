<?php

if ($errorMsg != ''){
    
    if($DEBUGGING){
        die($errorMsg);
    }
    
} else {
    $errorMsg = '';
}

require('../includes/config-db.php');

if ($errorMsg != '') { // failed to connect to DB

    // redirect user back to registration form
    header('Location: ../register/');
    exit();
    
} else {

    // Now we check if the data was submitted, isset() function will check if the data exists.
    if (!isset($_POST['username'], $_POST['password'], $_POST['email'], $_POST['accepted'])) {
        
        $errorMsg = 'Please complete the registration form.';
    
        if ($DEBUGGING) {
            die($errorMsg);
        }

    }

    // Make sure the submitted registration values are not empty.
    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['accepted'])) {
        
        $errorMsg = 'Please complete the registration form.';
    
        if ($DEBUGGING) {
            die($errorMsg);
        }
    }

    if (preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0) {
        
        $errorMsg = 'Please enter a valid username.';
    
        if ($DEBUGGING) {
            die($errorMsg);
        }

    }

    if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
        
        $errorMsg = 'Please enter a valid password. Passwords must be between 5 and 20 characters long.';
    
        if ($DEBUGGING) {
            die($errorMsg);
        }
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        
        $errorMsg = 'Please enter a valid email.';
    
        if ($DEBUGGING) {
            die($errorMsg);
        }
    }

    if ($errorMsg != '') { // there was an error message, redirect back to register screen

        // close connection to DB
        $DB_CONN->close();

        // redirect user back to registration form to fix errors
        header('Location: ../register/');
        exit();
        
    } else {

        // parse out form info from POST
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $accepted = $_POST['accepted'];
        
        if (!accepted) {
            
            $errorMsg = 'User must accept terms of service to create an account.';
    
            if ($DEBUGGING) {
                die($errorMsg);
            }
            
        } else {

            // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
            $stmt = $DB_CONN->prepare('SELECT id FROM Account WHERE username = ?');
            
            if (!$stmt) { // failed to prepare SQL statement

                // notify user that the SQL statement to check the existence of a username failed
                $errorMsg = 'Failed to prepare SQL statement for checking username.';
    
                if ($DEBUGGING) {
                    die($errorMsg);
                }
                
            } else {
                    // Bind parameters (s = string, i = int, b = blob, etc), 
                    // in our case the username is a string so we use "s"
                    if (!$stmt->bind_param('s', $username)) { // failed to bind
                               
                        $errorMsg = 'Failed to bind parameters for SQL statement (' . $stmt->errno . ') ' . $stmt->error;

                        if ($DEBUGGING) {
                            die($errorMsg);
                        }
                    }

                    // execute SQL statement
                    if (!$stmt->execute()) { //failed to execute
                               
                        $errorMsg = 'Failed to execute SQL statement (' . $stmt->errno . ') ' . $stmt->error;

                        if ($DEBUGGING) {
                            die($errorMsg);
                        } 
                    }

                    // Store the result so we can check if the account exists in the database.
                    $stmt->store_result();

                    // when the statement returns at least one row
                    if ($stmt->num_rows > 0) {

                        // notify user that account is already created under this username
                        $errorMsg = 'Please create a unique username.';
    
                        if ($DEBUGGING) {
                            die($errorMsg);
                        }

                    } else {

                        // setup string for SQL query
                        $sql_query = 'INSERT INTO Account (username, passkey, email) VALUES (?, ?, ?)';

                        $stmt = $DB_CONN->prepare($sql_query);

                        if (!$stmt) { // failed to prepare SQL statement

                            // notify user that the SQL statement to insert new account data failed
                            $errorMsg = 'Failed to prepare SQL statement for creating an account.';
    
                            if ($DEBUGGING) {
                                die($errorMsg);
                            }
                            
                        } else {

                           // hash password before storing in DB
                           $passkey = 
                                   password_hash(
                                        base64_encode(
                                            hash('sha256', $password, true)), PASSWORD_DEFAULT);

                           // bind parameters to SQL statement (this approach prevents SQL injection)
                           if (!$stmt->bind_param('sss', $username, $passkey, $email)) { // failed to bind
                               
                                $errorMsg = 'Failed to bind parameters for SQL statement for creating an account (' . $stmt->errno . ') ' . $stmt->error;
    
                                if ($DEBUGGING) {
                                    die($errorMsg);
                                }
                           }

                           // execute SQL insert for new account
                           if (!$stmt->execute()) { // failed to execute
                               
                                $errorMsg = 'Failed to execute SQL statement for creating an account (' . $stmt->errno . ') ' . $stmt->error;
    
                                if ($DEBUGGING) {
                                    die($errorMsg);
                                }
                           }

                        }
                    }

                    // close the statement (?)
                    $stmt->close();
            }

            if ($errorMsg == '') { // successful! redirect to login screen

                // close connection to DB
                $DB_CONN->close();

                // redirect user to the login screen
                header('Location: ../login/');
                exit();

            } else { // there was an error message, redirect back to register screen

                // close connection to DB
                $DB_CONN->close();

                // redirect user back to registration form to fix errors
                header('Location: ../register/');
                exit();
            }
        }
    }
}