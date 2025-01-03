<?php
//Improved version using stream handling
$filename = 'large_file.txt';
$handle = fopen($filename, 'r');
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // Process each line individually
        //echo $line; // Example: Process each line
        //Example of memory efficient processing
        processLine($line);
    }
    fclose($handle);
} else {
    echo "Unable to open file.";
}

function processLine(string $line): void
{
  //Do something with line without loading whole file to memory
}
?>
