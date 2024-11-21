<?php
$studentsData = file_get_contents('abc.xml');
//echo $studentsData;
$addmission = new SimpleXMLElement($studentsData);
echo $addmission -> students[0]->name_first;
?>