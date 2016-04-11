<?php
    $db = mysql_connect('127.0.0.1', 'root', '') or die('Could not connect: ' . mysql_error());
    mysql_select_db('user_data') or die('Could not select database');
    
    // Strings must be escaped to prevent SQL injection attack.
    $name = mysql_real_escape_string($_GET['name'], $db);
    $score = mysql_real_escape_string($_GET['score'], $db);
    $hash = $_GET['hash'];
    
    $secretKey="1"; # Change this value to match the value stored in the client javascript below
    
    $real_hash = md5($name . $score . $secretKey);
    if($real_hash == $hash) {
        // Send variables for the MySQL database class.
        $query = "insert into scores values (NULL, '$name', '$score');";
        $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    }
  

    $db = mysql_connect('127.0.0.1', 'root', '') or die('Could not connect: ' . mysql_error());
    mysql_select_db('user_data') or die('Could not select database');
    
    // Strings must be escaped to prevent SQL injection attack.
    $name = mysql_real_escape_string($_GET['name'], $db);
    $time = mysql_real_escape_string($_GET['time'], $db);
    $hash = $_GET['hash'];
    
    $secretKey="1"; # Change this value to match the value stored in the client javascript below
    
    $real_hash = md5($name . $time . $secretKey);
    if($real_hash == $hash) {
        // Send variables for the MySQL database class.
        $query = "insert into scores values (NULL, '$name', '$time');";
        $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    }
    


    $db = mysql_connect('127.0.0.1', 'root', '') or die('Could not connect: ' . mysql_error());
    mysql_select_db('user_data') or die('Could not select database');
    
    // Strings must be escaped to prevent SQL injection attack.
    $name = mysql_real_escape_string($_GET['name'], $db);
    $age = mysql_real_escape_string($_GET['age'], $db);
    $gender = mysql_real_escape_string($_GET['gender'], $db);
    $hash = $_GET['hash'];
    
    $secretKey="1"; # Change this value to match the value stored in the client javascript below
    
    $real_hash = md5($name . $age . $gender . $secretKey);
    if($real_hash == $hash) {
        // Send variables for the MySQL database class.
        $query = "insert into scores values (NULL, '$name', '$age', '$gender');";
        $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    }
    


    $db = mysql_connect('127.0.0.1', 'root', '') or die('Could not connect: ' . mysql_error());
    mysql_select_db('user_data') or die('Could not select database');
    
    // Strings must be escaped to prevent SQL injection attack.
    $name = mysql_real_escape_string($_GET['name'], $db);
    $date = mysql_real_escape_string($_GET['date'], $db);
    $hash = $_GET['hash'];
    
    $secretKey="1"; # Change this value to match the value stored in the client javascript below
    
    $real_hash = md5($name . $date . $secretKey);
    if($real_hash == $hash) {
        // Send variables for the MySQL database class.
        $query = "insert into scores values (NULL, '$name', '$date');";
        $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    }