<?php

$changedpw = false;

require('../includes/config-db.php');

if ($errorMsg != '') { // there was an error message, redirect back to account screen

    // close connection to DB
    $DB_CONN->close();

    // redirect user back to registration form to fix errors
    header('Location: ../account/');
    exit();

} else {

    // parse out form info from POST
    $id = $_SESSION['id'];
    $oldpw = $_POST['oldpw'];
    $newpw = $_POST['newpw'];
    $oldpk = '';
    $newpk = '';

    if ($oldpw == $newpw) {

        $errorMsg = 'New password cannot match old password.';

    } else {

        // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
        $stmt = $DB_CONN->prepare('SELECT passkey FROM Account WHERE id = ?');

        if (!$stmt) { // failed to prepare SQL statement

            // notify user that the SQL statement to check the existence of a username failed
            $errorMsg = 'Failed to prepare SQL statement for retrieving old passkey.';

        } else {
                // Bind parameters (s = string, i = int, b = blob, etc), 
                // in our case the username is a string so we use "s"
                if (!$stmt->bind_param('s', $id)) { // failed to bind

                    $errorMsg = 'Failed to bind parameters for SQL statement (' . $stmt->errno . ') ' . $stmt->error;
                    
                }

                // execute SQL statement
                if (!$stmt->execute()) { // failed to execute

                    $errorMsg = 'Failed to execute SQL statement (' . $stmt->errno . ') ' . $stmt->error;
                    
                }

                // Store the result so we can check if the account exists in the database.
                $stmt->store_result();

                // when the statement returns no data
                if ($stmt->num_rows <= 0) {

                    // notify user of a failed login attempt
                    $errorMsg = 'Failed to retrieve old passkey.';
                    

                } else {

                    // fetch the results
                    $stmt->bind_result($oldpk);
                    $stmt->fetch();

                    // check to see if the old password matches the old passkey from the DB
                    $match = 
                        password_verify(
                            base64_encode(
                                hash('sha256', $oldpw, true)), $oldpk);

                    if (!$match) { // when they don't match, redirect to account page with error message

                        $errorMsg = 'Failed to change password, incorrect password.';
                        

                    } else { // old password matches old passkey, so update paskey in DB

                        // setup string for UPDATE SQL query
                        $sql_query = 'UPDATE Account SET passkey = ?, updated = CURRENT_TIMESTAMP WHERE id = ?)';

                        $stmt = $DB_CONN->prepare($sql_query);

                        if (!$stmt) { // failed to prepare SQL statement

                            // notify user that the SQL statement to insert new account data failed
                            $errorMsg = 'Failed to prepare SQL statement for creating an account.';

                        } else {

                           // hash password before storing in DB
                           $newpk = 
                                   password_hash(
                                        base64_encode(
                                            hash('sha256', $newpw, true)), PASSWORD_DEFAULT);

                           // bind parameters to SQL statement (this approach prevents SQL injection)
                           if (!$stmt->bind_param('si', $newpk, $id)) { // failed to bind

                                $errorMsg = 'Failed to bind parameters for SQL statement for updating an account (' . $stmt->errno . ') ' . $stmt->error;

                           }

                           // execute SQL insert for new account
                           if (!$stmt->execute()) { // failed to execute

                                $errorMsg = 'Failed to execute SQL statement for creating an account (' . $stmt->errno . ') ' . $stmt->error;

                           }
                        }                       
                    }
                }

                // close up the sql stmt object
                $stmt->close();
        }
    }

    // close connection to DB
    $DB_CONN->close();

    $changedpw = ($errorMsg == '');

    // redirect user back to registration form to fix errors
    header('Location: ../account/');
    exit();

}