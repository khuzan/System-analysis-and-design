<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	
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

<form method="POST" action="../functions/process.php">
  <div class="container">

      <h3>Class Schedule</h3>
      <hr class="style3">
         <table border="2" align="center" width="820">
          <tr>
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
            <td>
              <select name = "lname" required>
              <option></option>
              <option>Nogra</option>
              <option>Acedilla</option>
              <option>Evangelio</option>
              <option>Olmedo</option>
              <option>Estandart</option>
              </select>
            </td>
             <td>
               <select name="month" required>
                 <option></option>
                 <option>1st Semester</option>
                 <option>2nd Semester</option>
                 <option>Summer</option>
               </select>
             </td>
             <td>
                <select name= "taym" required>
                  <option></option>
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
             <td>
                  
                    <select name="subject" required>
                      <option></option>
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
             <td>
               
                 <select name="day" required>
                   <option></option>
                   <option>Sunday</option>
                   <option>Monday</option>
                   <option>Tuesday</option>
                   <option>Wednesday</option>
                   <option>Thursday</option>
                   <option>Friday</option>
                   <option>Saturday</option>
                 </select>
               
             </td>
             <td>
               <select name="course" required>
                 <option></option>
                 <option>BSIT</option>
                 <option>ENGR</option>
               </select>
             </td>
             <td align="center">
               <select name="students"  required>
                <option></option>
                <option>35</option>
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
             <td>
               <select name="room" required>
                 <option></option>
                 <option>C62</option>
                 <option>C64</option>
                 <option>C65</option>

               </select>
             </td>
         </tr>

     
         
         <input type="submit" name="submit" value="Submit">
        </table>
  </div>
</form>
</body>
</html>

<style type="text/css">
	body{
	background-image: url(../images/blue-lab.jpg);
	
}
img{
  width: 50px;
  margin: 10px 0px 100px 100px;
  
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
.style3{
  border-bottom: 1px solid;
  width: 750px;

}

.container{
  width: 870px;
  height: 200px;
  text-align: center;
  margin: 0 auto;
  background-color: rgba(11, 83, 69,0.7); 
  border-radius: 4px;
  margin-top: 150px;
  box-shadow: 10px 10px 5px;

}
h3{
  padding-top: 5px;
  padding-right: 500px;
  margin: 0 auto;
  font-size: 25px;

}
table{
  background-color: #154360;
}


table td{
  width: 180px;
  height: 30px;
  background-color: #2874A6;
}
table tr select{
  background-color: #95A5A6;
  height: 25px;
}
input[type="submit"]{
  position: absolute;
  top: 65%;
  left: 47%;
  padding: 15px 30px;
  color: #fff;
  border: none;
  background-color: #DC7633;
  border-radius: 5px;
  box-shadow: 5px 5px 5px black;

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