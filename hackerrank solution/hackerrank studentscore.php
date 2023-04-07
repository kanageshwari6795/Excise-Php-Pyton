<?php
$students = [['Harry', 37.21], ['Berry', 37.21], ['Tina',37.2], ['Akiriti', 41], ['Harsh', 39]];
usort($students, function($a, $b) {
    return $a[1] <=> $b[1];
});
$secondLowestGrade = $students[1][1];
$secondLowestStudentNames =[];
foreach ($students as $student) {
    if($students[1] == $secondLowestGrade) {
        array_push($secondLowestStudentNames, $student[0]);
    }
}
sort($secondLowestStudentNames);
foreach($secondLowestStudentNames as $name){
    echo $name . "\n";
}
?>