<?php
session_start();
include "../functions/function.php";
$db = connect();

	if(isset($_POST['save'])){
		// $_SESSION['updateerror']='0';

		$id = $_POST['id'];
		$lname = $_POST['lname'];
 		$month = $_POST['month'];
		$time = $_POST['taym'];
		$subject = $_POST['subject'];
		$day = $_POST['day'];
		$course = $_POST['course'];
		$students = $_POST['students'];
		$room = $_POST['room'];

			$stmt = $db->prepare("UPDATE registration SET 
								lname = :lname,
								month = :month, 
		                 		taym = :taym, 
		                 		subject = :subject, 
		                 		day = :day,
		                 		course = :course,
		                 		students = :students,
		                 		room = :room 
		                 		WHERE id = :id");
			$stmt->bindValue('lname',$lname);
			$stmt->bindValue('month',$month);
			$stmt->bindValue('taym',$time);
			$stmt->bindValue('subject',$subject);
			$stmt->bindValue('day',$day);
			$stmt->bindValue('course',$course);
			$stmt->bindValue('students',$students);
			$stmt->bindValue('room',$room);
			$stmt->bindValue('id',$id);
		
			$stmt->execute();
			header('Location:../admin/schedule.php#popup4');

	}

	
?>