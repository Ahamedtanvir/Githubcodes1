<html>
	<head></head>
	<body>
	
		<?php
			$uname="";
			$err_uname="";
			$password="";
			$err_password="";
			
			if($_SERVER['REQUEST_METHOD']== "POST"){
				if(empty($_POST["uname"])){
					$err_uname="*Username Required";
				}
				else if(strlen($_POST["uname"])<6){
					$err_uname="*Username should be at least 5 characters";
				}
				else{
					$uname=$_POST["uname"];
				}
				if(empty($_POST["pass"])){
					$err_password="*Password Required";
				}
				else{
					$password=$_POST["pass"];
				}
			}
			
			/* echo "Name: ". $_POST["uname"]."<br>";
			echo "Password: ". $_POST["pass"]."<br>";
			echo "Gender: ".$_POST["gender"]."<br>";
			echo "Profession: ".$_POST["profession"]."<br>";
			echo "Bio: ".$_POST["bio"]."<br>";
			$var = $_POST["hobbies"];
			for($i=0;$i<count($var);$i++){
				echo $var[$i]."<br>";
			} */
			
		?>
	
	
	
	
	<!-- <table border="1" >
		   <tr>
				 <th>Name</th>
				 <th>Id</th>
				 <th>Cgpa</th>
		   </tr>
		   <tr>
				 <td>Tanvir</td>
				 <td>123</td>
				 <td>2.4</td>
		   </tr>
			<tr>
				 <td>Sabbir</td>
				 <td>125</td>
				 <td>3.5</td>
		   </tr>	
		</table>
	-->
		<form action="" method="post">
			<table>
				<tr>
					<td rowspan="2"><span>User access </span></td>
					<td>:<input type="text" placeholder="Username" value="<?php echo $uname;?>" name="uname">
					<span><?php echo $err_uname;?></span></td>
					
				</tr>
				<tr>
					<!--<td ><span>Password </span></td>-->
					<td>:<input type="password" placeholder="Password" value="<?php echo $password;?>" name="pass">
					<span><?php echo $err_password;?></span></td>
				</tr>
				<tr>
					<td><span>Gender</span></td>
					<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female</td>
				</tr>
				<tr>
					<td><span>Hobbies</span></td>
					<td>:<input type="checkbox" value="Movies" name="hobbies[]">Movies 
					     <input type="checkbox" value="Music" name="hobbies[]">Music 
						 <input type="checkbox" value="Games" name="hobbies[]">Games</td>
				</tr>
				<tr>
					<td><span>Profession </span></td>
					<td>:
						<select name="profession">
							<option>Teaching</option>
							<option>Business</option>
							<option>Service</option>
						</select> 
					</td>
				</tr>
				<tr>
					<td><span>Bio </span></td>
					<td>:<textarea name="bio"></textarea></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Submit"></td>
				</tr>
				
			</table>
			 
			
		</form>
	</body>
</html>