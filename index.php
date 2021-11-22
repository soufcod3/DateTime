<?php

// Instanciation DateTime class
$presentTime = new DateTime();

// Set a destination date using string
$destinationTimeString = '2030-01-01 14:56';

// Set a destinationTime variable and format the date using the string inside $destinationTimeString
$destinationTime = DateTime::createFromFormat('Y-m-d H:i', $destinationTimeString);

// Give an array with values y, m, d etc.
$timeDifference = $destinationTime->diff($presentTime);

// Set a format to presentTime
$presentTime = $presentTime->format('M d Y a h:i');

echo "<h4> PRESENT TIME: " . $presentTime . "</h4>" . PHP_EOL;
echo "<h4> DESTINATION TIME: " . $destinationTime->format('M d Y a h:i') . "</h4>" . PHP_EOL;
echo "<h4> DIFFERENCE: " . $timeDifference->format('%y years, %m months, %d days, %h hours and %i minutes away') . "</h4>" . PHP_EOL;
