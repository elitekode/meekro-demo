<?php

require_once 'meekrodb.2.3.class.php';
DB::$user = 'xx';
DB::$password = 'xx';
DB::$dbName = 'phpsandbox';
DB::$host = '127.0.0.1';

// Make an array in php of all students in the class

// $students = array('Tristan', 'Josh', 'Bogdan', 'Lazlo', 'Keith', 'Will', 'Curtis', 'Joe', 'Kochan', 'Patrick', 'Jonathan', 'Jeremy');

$students = array('student'=>'Tristan', 'Josh', 'Bogdan', 'student2'=>'Lazlo', 'Keith', 'Will', 'Curtis', 'Joe', 'Kochan', 'Patrick', 'Jonathan', 'Jeremy');

$numberOfStudents = $_GET['numberOfStudents'];
$students = DB::query("SELECT * FROM students");
for($i=0; $i<$numberOfStudents; $i++){
	print $students[$i]['name'];
	print "<hr />";
}


// foreach($students as $student){
// 	// insert a new student
// 	DB::insert('students', array(
// 	  'name' => $student
// 	));
// }


// get information on the account with the username Will
// $student = DB::query("SELECT * FROM students WHERE name=%s", 'Will');

// $result = mysql_query("SELECT * FROM students WHERE name = 'Will'");
// foreach($result as $student){
// 	$row = mysql_fetch_assoc($student);
// 	$student_array[] = $row;
// }

// exit;

// print_r($student);
// exit;


// print "<pre>";
// print_r($students);
// print "</pre>";

// $students1 = array(
// 	'Tristan',
// 	'Josh',
// 	'Bogdan',
// 	'Lazlo',
// 	'Keith',
// 	'Will',
// 	'Curtis',
// 	'Joe',
// 	'Kochan',
// 	'Patrick',
// 	'Jonathan',
// 	'Jeremy'
// );

// print "<pre>";
// print_r($students1);
// print "</pre>";

// // print_r($students1);

// $students2 = array(
// 	'student0' => 'Tristan',
// 	'student1' => 'Josh',
// 	'student2' => 'Bogdan',
// 	'student3' => 'Lazlo',
// 	'student4' => 'Keith',
// 	'student5' => 'Will',
// 	'student6' => 'Curtis',
// 	'student7' => 'Joe',
// 	'student8' => 'Kochan',
// 	'student9' => 'Patrick',
// 	'student10' => 'Jonathan',
// 	'student11' => 'Jeremy'
// );

// print "<pre>";
// print_r($students2);
// print "</pre>";



// $students3 = array();
// $students3['student1'] = 'Tristan';
// $students3['student2'] = 'Josh';
// $students3['student3'] = 'Bogdan';
// $students3['student4'] = 'Lazlo';
// $students3['student5'] = 'Keith';
// $students3['student6'] = 'Will';
// $students3['student7'] = 'Curtis';
// $students3['student8'] = 'Joe';
// $students3['student9'] = 'Kochan';
// $students3['student10'] = 'Patrick';
// $students3['student11'] = 'Jonathan';
// $students3['student12'] = 'Jeremy';


// // print_r($students3);


// $students5 = array();
// $students5[] = 'Tristan';
// $students5[] = 'Josh';
// $students5[] = 'Bogdan';
// $students5[] = 'Lazlo';
// $students5[] = 'Keith';
// $students5[] = 'Will';
// $students5[] = 'Curtis';
// $students5[] = 'Joe';
// $students5[] = 'Kochan';
// $students5[] = 'Patrick';
// $students5[] = 'Jonathan';
// $students5[] = 'Jeremy';


// print_r($students5);


// $students6 = array();
// array_push($students6, 'Tristan', 'josh', 'Patrick');

// array_push($students6, 'student1'=>'Tristan', 'student2'=>'josh');


?>


	<a href="students.php?numberOfStudents=88"><button type="submit">Click to add a student</button></a>
	<a href="students.php?numberOfStudents=0"><button type="submit">Click to remove a studnet</button></a>
