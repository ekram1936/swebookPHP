<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include('db.php');

if (isset($_POST['save'])){
$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender =$_POST['gender'];
$department = $_POST['dcode'];
$reg="insert into usertable (username,email,password,gender,dcode) values ('$name' , '$email' , '$password', '$gender','$department')";
$sql=mysqli_query($conn,$reg);

}
$s="SELECT dcode
 from userregistration.department;
";
$result1= mysqli_query($conn,$s);


?>
<form action="" method="post">
      <div class="input">
         <label for="username">Username</label>
         <input type="text" name="username" id="username" required>
         <span class="spin"></span>
      </div>

      <div class="input">
         <label for="email">Email</label>
         <input type="email" name="email" id="email" required>
         <span class="spin"></span>
      </div>
      <label for="gender">Gender</label>
       <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female<br>

      <div class="input">
         <label for="reregpass">Password</label>
         <input type="password" name="password" id="password" required>
         <span class="spin"></span>
      </div>
       <select name="dcode" >
                                                  <?php while($row1 = mysqli_fetch_array($result1)):; ?> 
                                                <option>
                                                    <?php  echo $row1[0];  ?>
                                                </option>
                                                   <?php  endwhile; ?> 
                                              </select>


      <div class="button">
         <button type="submit" name="save"><span>NEXT</span></button>
      </div>
</form>
</body>
</html>