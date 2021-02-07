<?php

$OpenFile = fopen("NRData.csv", "r");

echo '{ "@context" : { "Sites" : "http://schema.org/", "National Reserve Sites" : "http://web.socem.plymouth.ac.uk/" }, "Area" : [ { "@type" : "Ownership", </br>';

while (($line = fgetcsv($OpenFile)) !== false) {
    if (!empty($line)) {

        if ($line == $OpenFile) {
            echo($line);
        }
        echo '{ </br>';
        echo '"@type": "Site"'.$line[0].'</br>';
        echo '"Area" : '.$line[1].'</br>';
        echo '"Ownership" : '.$line[2].'</br>';
        echo '}, </br>';
        echo '</br>';
    }
}

fclose($OpenFile);