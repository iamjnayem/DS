<?php


$student_info = [];
$student_info['Name'] = "Ahsan Habib";
$student_info['Age'] = 11;
$student_info['Class'] = 6;
$student_info['RollNumber'] = 71;
$student_info['Contact'] = 'info@habib.net';

foreach($student_info as $key => $value){
    echo $key . ": " . $value . "\n";
}