<?php

$errorMsg = '';

require('../includes/config-db.php');

if ($errorMsg != '') { // failed to connect to DB

    // redirect user back to login form
    header('Location: ../login/');
    exit();
    
} else {

    // start a new session
    session_start();


    // next check to make sure the data from the login screen was correctly sent
    if ( !isset($_POST['username'], $_POST['password']) ) {

        //die('Please complete the login form');
        $errorMsg = 'Please complete the login form.';
    }

    // Make sure the submitted registration values are not empty.
    if (empty($_POST['username']) || empty($_POST['password']) ) {

        //die ('Please complete the login form');
        $errorMsg = 'Please complete the login form.';
    }

    if ($errorMsg != '') { // there was an error message, redirect back to login screen

        // close DB connection
        $DB_CONN->close();

        header('Location: ../login/');
        exit();
        
    } else {


        // parse out username and password from POST
        $username = filter_input(INPUT_POST, 'username');
        $password = filter_input(INPUT_POST, 'password');

        // setup SQL query
        $sql_query = 'SELECT id, passkey FROM Account WHERE username = ?';

        // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
        $stmt = $DB_CONN->prepare($sql_query);

        // when the statement gets successfully constructed, continue with binding and executing
        if ($stmt) {
                // Bind parameters (s = string, i = int, b = blob, etc), 
                // in our case the username is a string so we use "s"
                $stmt->bind_param('s', $username);

                // execute SQL statement
                $stmt->execute();

                // Store the result so we can check if the account exists in the database.
                $stmt->store_result();

                // when the statement returns at least one row
                if ($stmt->num_rows > 0) {

                    // fetch the results
                    $stmt->bind_result($id, $passkey);
                    $stmt->fetch();

                    // Account exists, now we verify the password.
                    // Note: remember to use password_hash in your registration file 
                    // to store the hashed passwords.

                    $match = 
                        password_verify(
                            base64_encode(
                                hash('sha256', $password, true)), $passkey);

                    if ($match) {

                        // Verification success! User has loggedin!
                        // Create session data so we know the user is logged in, 
                        // (session data basically act like cookies but are stored on the server)
                        $loggedin = session_regenerate_id();

                        $_SESSION['loggedin'] = $loggedin;
                        $_SESSION['name'] = $username;
                        $_SESSION['id'] = $id;

                        $sql_query = 'UPDATE Account SET lastLogin = CURRENT_TIMESTAMP WHERE id=?';

                        $stmt = $DB_CONN->prepare($sql_query);

                        if ($stmt) {

                            $stmt->bind_param('i', $id);

                            $stmt->execute();

                        } else {

                            // notify user that the SQL statement to authenticate credentials failed
                            //die('Failed to prepare SQL statement for tracking last login.');
                            $errorMsg = 'Failed to prepare SQL statement for tracking last login.';
                        }


                    } else {

                        $ip = $_SERVER['REMOTE_ADDR'];
                        $time = time();
                        $diff = ($time - 1800);

                        $sql_query = 'INSERT INTO LoginAttempts (ipAddress, timeDiff) VALUES (?, ?)';

                        $stmt = $DB_CONN->prepare($sql_query);

                        if ($stmt) {

                            $stmt->bind_param('si', $ip, $diff);

                            $stmt->execute();

                            $sql_query = 'SELECT COUNT(*) FROM LoginAttempts WHERE ipAddress LIKE ? AND timeDiff > ?';

                            $stmt = $DB_CONN->prepare($sql_query);

                            if ($stmt) {

                                $stmt->bind_param('si', $ip, $diff);

                                $stmt->execute();

                                $stmt->store_result();

                                if ($stmt->num_rows > 0) {

                                    $stmt->bind_result($attempts);
                                    $stmt->fetch();

                                    if ($attempts > $maxfailedattempt) {
                                        //die('Only ' . $maxfailedattempt . ' login attempts allowed per 30 minutes.');
                                        $errorMsg = 'Only ' . $maxfailedattempt . ' login attempts allowed per 30 minutes.';
                                    }

                                }
                            } else {

                                // notify user that the SQL statement to authenticate credentials failed
                                //die('Failed to prepare SELECT SQL statement for tracking login attempts.');
                                $errorMsg = 'Failed to prepare SELECT SQL statement for tracking login attempts.';
                            }

                        } else {

                            // notify user that the SQL statement to authenticate credentials failed
                            //die('Failed to prepare SQL statement for tracking login attempts.');
                            $errorMsg = 'Failed to prepare INSERT SQL statement for tracking login attempts.';
                        }

                        // notify user of a failed login attempt
                        //die('Please ensure both username and password are properly entered.');
                        $errorMsg = 'Please ensure both username and password are properly entered.';
                    }

                } else {

                    // notify user of a failed login attempt
                    //die('Please ensure both username and password are properly entered.');
                    $errorMsg = 'Please ensure both username and password are properly entered.';
                }

                // close the statement (?)
                $stmt->close();
        } else {

            // notify user that the SQL statement to authenticate credentials failed
            //die('Failed to prepare SQL statement for checking credentials.');
            $errorMsg = 'Failed to prepare SQL statement for checking credentials.';
        }

        if ($errorMsg == '') { // successful! redirect to archives

            // close DB connection
            $DB_CONN->close();

            header('Location: ../archives/');
            exit();

        } else { // there was an error message, redirect back to login screen

            // close DB connection
            $DB_CONN->close();

            header('Location: ../login/');
            exit();
        }

    }
}
