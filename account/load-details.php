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

    // redirect user back to login form
    header('Location: ../account/');
    exit();
    
} else {
    
    if (!isset($_SESSION['id'])) {
        
        $errorMsg = 'User id not set in session data.';
        
        if ($DEBUGGING) {
            die($errorMsg);
        }
        
    } else {
        
        $userid = $_SESSION['id'];
        
        $sql_query = 
            'SELECT 
                A.username, 
                A.email,
                A.passkey,
                P.label, 
                A.lastLogin, 
                A.updated, 
                A.created 
            FROM 
                polestar.Account as A 
                INNER JOIN 
                polestar.Privileges as P 
                    ON A.privleges = P.id 
            WHERE
                A.id = ?';
        
        $stmt = $DB_CONN->prepare($sql_query);
        
        if (!$stmt) { // failed to prepare SQL

            // notify user that the SQL statement to authenticate credentials failed
            $errorMsg = 'Failed to prepare SQL statement for retreiving account details.';
    
            if ($DEBUGGING) {
                die($errorMsg);
            }
            
        } else {
            
            // Bind parameters (s = string, i = int, b = blob, etc), 
            // in our case the username is a string so we use "s"
            if (!$stmt->bind_param('i', $userid)) { // failed to bind

                $errorMsg = 'Failed to bind parameters for SQL statement (' . $stmt->errno . ') ' . $stmt->error;

                if ($DEBUGGING) {
                    die($errorMsg);
                }
            }

            // execute SQL statement
            if (!$stmt->execute()) { // failed to execute

                $errorMsg = 'Failed to execute SQL statement (' . $stmt->errno . ') ' . $stmt->error;

                if ($DEBUGGING) {
                    die($errorMsg);
                }
            }

            // Store the result so we can check if the account exists in the database.
            $stmt->store_result();
            
            // when the statement returns at least one row
            if ($stmt->num_rows <= 0) {

                // notify user of a failed login attempt
                $errorMsg = 'Please ensure both username and password are properly entered.';

                if ($DEBUGGING) {
                    die($errorMsg);
                }

            } else {

                // fetch the results
                $stmt->bind_result($username, $email, $passkey, $privileges, $lastLogin, $lastUpdated, $created);
                $stmt->fetch();
                
            }
            
            // close up the sql stmt object
            $stmt->close();
        }        

        // close DB connection object
        $DB_CONN->close();        
    }    
}