<?php

/*
 
 **************************************************************************
 Decode spam headers Web v0.2 (c) 2024 by suuhm

 Web application for easy using the decode-spam-headers script by mgeeky

 Credits:
 --------

 decode-spam-headers by mgeeky:
 https://github.com/mgeeky/decode-spam-headers

 ***************************************************************************

*/

// Check if a shell command and headerText were passed
if(isset($_GET['command']) && isset($_GET['headerText'])) {
    $command = $_GET['command'];
    $headerText = $_GET['headerText'];
    
    // Write the content of headerText to the file header_in_tmp.txt
    file_put_contents('header_in_tmp.txt', $headerText);
    
    // Execute the shell command and get the output
    exec($command, $output, $return);
  
    if ($return === 0) {
        // Return the output
        echo implode("\n", $output);
    } else {
        // Return an error message if the command failed
        echo "Error executing the command.";
    }
} else {
    // Display an error message if no shell command or headerText were specified
    echo "Error: No command or headerText specified.";
}
?>
