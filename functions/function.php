<?php
 function connect(){
 	$db = new PDO("mysql:host=localhost;dbname=scheduling_system","root","");
 	return $db;
 }

  function finduser($user, $password){
  	if($user=="admin"){
  		$db = connect();
		$query = $db->prepare("Select * From admin WHERE username = ? AND password = ?");
		$query->bindParam(1,$user);
		$query->bindParam(2,$password);

		if($query->execute()){
		if($query->rowCount() > 0){
			return true;
		}
		else{
			false;
		}
	}
  	}	
 }
 
function getemp2($lname){
	$names = "";
	$names.= '%';
	$names.= $lname;
	$names.= '%';
	$db = connect();
	$query = $db->prepare("SELECT * From registration 
		WHERE lname LIKE ? OR day LIKE ? ");
	$query->bindParam(1,$names);
	$query->bindParam(2,$names);
	$query->execute();
	$results = $query->fetchAll(PDO::FETCH_OBJ);
	return $results;
}


function findname($lname){
 	$names = "";
 	$names.= '%';
 	$names.= $lname;
 	$names.= '%';
 	$db = connect();
	$query = $db->prepare("SELECT * From registration 
		WHERE lname LIKE ? OR day LIKE ? ");
	$query->bindParam(1,$names);
	$query->bindParam(2,$names);

		if($query->execute()){
			if($query->rowCount() > 0){
				return true;
			}
			else{
				return false;
			}
		}
	}



  function getemp(){
	$db = connect();
	$sth = $db->prepare("Select * From registration order by id");
	$sth->execute();
	$results = $sth->fetchAll(PDO::FETCH_OBJ);
	return $results;
}



function daytimeroom_exists($time, $day, $room){
 $db = connect();
 $query = $db->prepare("SELECT * from registration WHERE  taym = ? AND  day = ? AND room = ?");

 
 $query->bindParam(1,$time);
 $query->bindParam(2,$day);
 $query->bindParam(3,$room);

 
 if($query->execute()){
		if($query->rowCount()>0){
			return true;
		}
		else{
			return false;
		}
	}

}

?>