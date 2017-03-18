<?php
session_start();
include "../functions/function.php";
$db = connect();
if(isset($_POST['submit'])){
		$lname = $_POST['lname'];
		$month = $_POST['month'];
		$time = $_POST['taym'];
		$subject = $_POST['subject'];
		$day = $_POST['day'];
		$course = $_POST['course'];
		$students = $_POST['students'];
		$room = $_POST['room'];

		
		if(daytimeroom_exists($time,$subject,$day,$room)) {
			header("Location:../admin/schedule.php#popup5");


		}
		else
		{
		$query = $db->prepare("INSERT INTO registration SET 
							lname = :lname,
							month = :month,
			 				taym = :taym,
			 				subject = :subject,
			   				day =:day,
							course = :course,
							students = :students,
							room = :room");

		$execute_query = [ ':lname' => $lname,
							':month' => $month,
		 					':taym' => $time,
		 					':subject' => $subject,
							':day' => $day,
							':course' => $course,
							':students' => $students,
						 	':room' => $room];


		
	
			if($query->execute($execute_query)){
					header('Location:../admin/schedule.php');
				}
			else{
			header("Location:../admin/table.php?dberror2");
				}

		}


		



}
	else{
		header("Location:../admin/table.php?error8=1");
	}		

		

 ?>
