<?php

$errorMsg = '';

require('../includes/config-db.php');

if ($errorMsg != '') { // failed to connect to DB

    // redirect user back to registration form
    header('Location: ../register/');
    exit();
    
} else {

    // Now we check if the data was submitted, isset() function will check if the data exists.
    if (!isset($_POST['username'], $_POST['password'], $_POST['email'], $_POST['accepted'])) {

        //die ('Please complete the registration form.');
        $errorMsg = 'Please complete the registration form.';

    }

    // Make sure the submitted registration values are not empty.
    if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email']) || empty($_POST['accepted'])) {

        //die ('Please complete the registration form.');
        $errorMsg = 'Please complete the registration form.';
    }

    if (preg_match('/[A-Za-z0-9]+/', $_POST['username']) == 0) {

        //die ('Please enter a valid username.');
        $errorMsg = 'Please enter a valid username.';

    }

    if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {

        //die ('Please enter a valid password. Passwords must be between 5 and 20 characters long.');
        $errorMsg = 'Please enter a valid password. Passwords must be between 5 and 20 characters long.';
    }

    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        //die ('Please enter a valid email.');
        $errorMsg = 'Please enter a valid email.';
    }

    if ($errorMsg == '') {

        // parse out form info from POST
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['$email'];
        $accepted = $_POST['accepted'];

        // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
        $stmt = $DB_CONN->prepare('SELECT id FROM Account WHERE username = ?');

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

                    // notify user that account is already created under this username
                    //die('Please create a unique username.');
                    $errorMsg = 'Please create a unique username.';

                } else {

                    // setup string for SQL query
                    $sql_query = 'INSERT INTO Account (username, passkey, email) VALUES (?, ?, ?)';

                    $stmt = $DB_CONN->prepare($sql_query);

                    if ($stmt) {

                       // hash password before storing in DB
                       $passkey = 
                               password_hash(
                                    base64_encode(
                                        hash('sha256', $password, true)), PASSWORD_DEFAULT);

                       // bind parameters to SQL statement (this approach prevents SQL injection)
                       $stmt->bind_param('sss', $username, $passkey, $email);

                       // execute SQL insert for new account
                       $stmt->execute();

                    } else {

                        // notify user that the SQL statement to insert new account data failed
                        //die('Failed to prepare SQL statement for adding account to the database.');
                        $errorMsg = 'Failed to prepare SQL statement for adding account to the database.';
                    }

                }

                // close the statement (?)
                $stmt->close();
        } else {

            // notify user that the SQL statement to check the existence of a username failed
            die('Failed to prepare SQL statement for checking username.');
            $errorMsg = 'Failed to prepare SQL statement for checking username.';
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


    } else { // there was an error message, redirect back to register screen

        // close connection to DB
        $DB_CONN->close();

        // redirect user back to registration form to fix errors
        header('Location: ../register/');
        exit();
    }
}