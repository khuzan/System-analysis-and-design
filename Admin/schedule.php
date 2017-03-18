<!DOCTYPE html>
<?php

session_start();
include "../functions/function.php";
$db = connect();

 if(isset($_GET['action']) && $_GET['action']=='delete'){
 	$db = connect();
 	$sth = $db->prepare("delete FROM registration Where id = :id");
 	$sth->bindValue('id',$_GET['id']);
 	$sth->execute();
 }


 $noob = getemp();
 
 if(isset($_POST['search'])){
  if(findname($_POST['search'])){
    $noob = getemp2($_POST['search']);
  }
  else{
    header('Location:#popup3');
  }
}


//if(!isset($_SESSION['login'])){
 //	header('Location: ../index.php?error2');
 //}

// $id = $_SESSION['login'];

 //$stmt2 = $db->prepare("select * from user where user_id = :user");
 //	$stmt2->bindValue(':user',$id);
 //	$stmt2->execute();
 //	$account2 = $stmt2->fetch(PDO::FETCH_OBJ);
 //	$id_number = $account2->user_id;
 //	$user = $account2->username;
?>

<html>
	<head>
	<title>Schedule</title>

	</head>
<body>

	 <hr class="style1" >
      <h2 align="center">Welcome Admin !</h2>
  <hr class="style2">

  <div class="navi">
    <nav>
      <ul>
          <li><a href="schedule.php">| HOME</a></li>
        <li><a href="table.php">| ADD SCHEDULE</a></li>
        <li><a href="../functions/logout.php">| LOG OUT</a></li>
      </ul>
    </nav>
  </div>
  <br>
  <div class="dib">
        <form class="search" method="POST" action="schedule.php" >
          <input type="text" class="sirts" name="search" placeholder="Search by Name">
        </form>
 </div>

	<div class="wrapper" >
  <table class="table2"  border="2">

	<tr class="font1">
    <th>Instructor's Name</th>
		<th>Semester</th>
		<th>Time</th>
		<th>Subject</th>
		<th>Day</th>
		<th>Course</th>
    <th>No. of Students</th>
		<th>Room</th>
		<th>Option</th>

	</tr>
	<?php foreach ($noob as $g ):?>
	<tr class="font">
    <td><?php echo $g->lname;?></td>
		<td><?php echo  $g->month; ?></td>
		<td><?php echo  $g->taym; ?></td>
		<td><?php echo  $g->subject; ?></td>
		<td><?php echo  $g->day; ?></td>
		<td><?php echo  $g->course; ?></td>
    <td><?php echo  $g->students; ?></td>
		<td><?php echo  $g->room; ?></td>

		<td><a href="../functions/page.php?id=<?php echo $g->id;?>">Edit</a> |
		<a href="schedule.php?id=<?php echo $g->id;?>
		&action=delete" onclick="return confirm('Are you sure?')">Delete</a>
		</td>
	</tr>
	<?php endforeach;?>

	</table>

 	</div>
</div>

<div id="popup1" class="overlay">

	<?php
	$name = $_SESSION['try'];
	$db = connect();
	$stmt = $db->prepare("SELECT * from registration where id = :id");
	$stmt->bindValue('id',$name);
	$stmt->execute();
	$account = $stmt->fetch(PDO::FETCH_OBJ);
	?>
		<div class="popup1">
					<a class="close" href="schedule.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&times</a>

						<form action="../functions/update.php" method="POST">
						<h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSet New Schedule Information</h2>
						<input required="Required Field" type="hidden" name="id"
					 	value="<?php echo $name;?>">


				      <table class="poptable">
          <tr align="center">
           <td>Instructor's Name</td>
           <td>Semester</td>
           <td>Time</td>
           <td>Subject</td>
           <td>Day</td>
           <td>Course</td>
           <td>No. of Students</td>
           <td>Room</td>
         </tr>
         <tr>
            <td align="center">
              <select name = "lname" required>
              <option><?php echo $account->lname ?></option>
              <option>Nogra</option>
              <option>Acedilla</option>
              <option>Evangelio</option>
              <option>Olmedo</option>
              <option>Estandart</option>
              </select>
            </td>
            <td align="center">
               <select name="month"  required>
                 <option><?php echo $account->month ?></option>
                 <option>1st Semester</option>
                 <option>2nd Semester</option>
                 <option>Summer</option>
               </select>
             </td>
             <td align="center">
                <select name= "taym" required>
                  <option><?php echo $account->taym ?></option>
                  <option>8:00 AM</option>
                  <option>8:30 AM</option>
                  <option>9:00 AM</option>
                  <option>9:30 AM</option>
                  <option>10:00 AM</option>
                  <option>10:30 AM</option>
                  <option>11:00 AM</option>
                  <option>11:30 AM</option>
                  <option>12:00 NN</option>
                  <option>12:30 NN</option>
                  <option>1:00 PM</option>
                  <option>1:30 PM</option>
                  <option>2:00 PM</option>
                  <option>2:30 PM</option>
                  <option>3:00 PM</option>
                  <option>3:30 PM</option>
                  <option>4:00 PM</option>
                  <option>4:30 PM</option>
                  <option>5:00 PM</option>
                  <option>5:30 PM</option>
                  <option>6:00 PM</option>
                  <option>6:30 PM</option>
                  <option>7:00 PM</option>
                  <option>7:30 PM</option>
                  <option>8:00 PM</option>
                  <option>8:30 PM</option>
                  <option>9:00 PM</option>
                </select>
             </td>
             <td align="center">

                    <select name="subject" >
                      <option><?php echo $account->subject ?></option>
                      <option>CpE401</option>
                      <option>EE50</option>
                      <option>ECE420</option>
                      <option>ECE310</option>
                      <option>CpE410</option>
                      <option>ECE551</option>
                      <option>ECE553</option>
                      <option>CpE450</option>
                      <option>ECE330</option>
                      <option>CA211</option>

                    </select>

             </td>
             <td align="center">

                 <select name="day"  required>
                   <option><?php echo $account->day ?></option>
                   <option>Sunday</option>
                   <option>Monday</option>
                   <option>Tuesday</option>
                   <option>Wednesday</option>
                   <option>Thursday</option>
                   <option>Friday</option>
                   <option>Saturday</option>
                 </select>

             </td>
             <td align="center">
               <select name="course"  required>
                 <option><?php echo $account->course ?></option>
                 <option>BSIT</option>
                 <option>ENGR</option>
               </select>
             </td>
              <td align="center">
               <select name="students" required>
                <option><?php echo $account->students?></option>
                <option >35</option>
                <option>34</option>
                <option>33</option>
                <option>32</option>
                <option>31</option>
                <option>30</option>
                <option>29</option>
                <option>28</option>
                <option>27</option>
                <option>26</option>
                <option>25</option>
                <option>24</option>
                <option>23</option>
                <option>22</option>
                <option>21</option>
                <option>20</option>
                <option>19</option>
                <option>18</option>
                <option>17</option>
                <option>16</option>
                <option>15</option>
                <option>14</option>
                <option>13</option>
                <option>12</option>
                <option>11</option>
                <option>10</option>
                <option>9</option>
                <option>8</option>
                <option>7</option>
                <option>6</option>
                <option>5</option>
                <option>4</option>
                <option>3</option>
                <option>2</option>
                <option>1</option>
               </select>
             </td>
             <td align="center">
               <select name="room"  required>
                 <option><?php echo $account->room ?></option>
                 <option>C62</option>
                 <option>C64</option>
                 <option>C65</option>
               </select>
             </td>
        <tr>

				<td><input type="submit" name="save" value="Save"></td>
		</tr>
        </table>
			</form>
			</div>
		</div>




</body>
<div id="popup3" class="overlay">
  <div class="popup">
  <a class="close" href="schedule.php">&times</a>
  <h1>No results have been found!</h1>
  </div>
</div>


<div id="popup4" class="overlay">
  <div class="popup">
  <a class="close" href="schedule.php">&times</a>
  <h1 align="center">Successfully updated! </h1>
  </div>
</div>

<div id="popup5" class="overlay">
  <div class="popup">
  <a class="close" href="schedule.php">&times</a>
  <h1 align="center">Schedule is Already exists! </h1>
  </div>
</div>



</html>


<style>

  body{
  background-image: url(../images/blue-lab.jpg);
  margin: 0 auto;


}


.style1{
  border-top: 1px solid;
  margin-top: 50px;
  width: 40%;

}
.style2{
  border-top: 2px solid ;
  width: 65%;

}

.wrapper{

 height: 300px;
 width: 900px;
 position: absolute;
  left: 19%;
  overflow: auto;

}
.wrapper table th{
  background-color: green;
  width: 110px;
  height: 40px;
}
.wrapper table td{
  height:25px;
  background-color: gray;

}
.search{
  position: relative;
  left: 270px;
  margin: 10px auto;
  border-radius: 50px;
}

.sirts{
  width: 200px;
  height: 25px;


}


/*popup*/
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(81, 90, 90, 0.7);
  transition: opacity 100ms;
  visibility: hidden;
  opacity: 0;
}
.overlay h1{
  position: absolute;
  left: 16%;
  top: 25%;
  color: #17202A;
}


.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
  margin: 260px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 36%;
  height: 130px;
  position: relative;
  background-color: #2E86C1;
  transition: all 3s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}

.popup td{
  width: 80px;
  background-color: #A93226;
}
.popup td select{
  width: 90px;
  height: 30px;
  background-color: #1A5276;

}


/*popup*/
.popup1 {
  margin: 260px auto;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 56%;
  height: 150px;
  position: relative;
  background-color: #2E86C1;
  transition: all 3s ease-in-out;
}

.popup1 h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup1 .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup1 .close:hover {
  color: #06D85F;
}
.popup1 .content {
  max-height: 30%;
  overflow: auto;
}

@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup1{
    width: 70%;
  }
}

.popup1 td{
  width: 80px;
  background-color: #A93226;
}
.popup1 td select{
  width: 90px;
  height: 30px;
  background-color: #1A5276;

}

input[type="submit"]{
  position: absolute;
  margin-top: 10px;
  left: 47%;
  padding: 5px 15px;
  background-color: #17202A;
  color: #fff;
}

.navi{
  width: 500px;
  margin: 0 auto;
  margin-left: 700px;
  margin-top: 50px;
}
.navi ul li{
  float: left;
  margin-right: 50px;


}
.navi ul{
  list-style: none;

}
.navi ul li a{
  text-decoration: none;
  font-weight: bold;
  color: #060606;

}
.navi ul li a:hover{
  color: black ;
  background-color: #23c7f6;
  padding: 10px 15px;
  border-radius: 5px;
}

</style>
