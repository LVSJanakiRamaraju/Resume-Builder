<?PHP
	$rollno= $fullname= $mobile= $email= $website= $linkedin= $github= $hno= $street= $city= $state= $country= $pin= $careerobjective= $betotal= $becollege= $beuniversity= $beyear= $preuniversitymarks= $pucollege= $puuniversity= $puyear= $sslcmarks= $school= $schoolboard= $sslcyear= $project1= $project1abstract= $project2= $project2abstract= $project3= $project3abstract= $project4= $project4abstract= $publication1= $publication2= $publication3= $publication4= $programming= $web= $tools= $os= $extra1= $extra2= $extra3= $extra4= $extra5= $hobby1= $hobby2= $hobby3= $hobby4= $hobby5= $fathersname= $mothersname= $gender= $dd= $mm= $yyyy= $nationality= $maritalstatus= $languagesknown= $declaration= "";
	
	$link=mysqli_connect("localhost","root","","Ramaraju") or die("Error " . mysqli_error($link)); 

	$rollno= $_POST["rollno"];
	
	$query="SELECT * FROM `resume` where `rollno`='$rollno'";
	
	$hno_query=mysqli_query($link,"SELECT `hno` FROM `resume` where `rollno`='$rollno'");
	$hno_array=mysqli_fetch_assoc($hno_query);
	$hno=$hno_array['hno'];
	
	$street_query=mysqli_query($link,"SELECT `street` FROM `resume` where `rollno`='$rollno'");
	$street_array=mysqli_fetch_assoc($street_query);
	$street=$street_array['street'];
	
	$city_query=mysqli_query($link,"SELECT `city` FROM `resume` where `rollno`='$rollno'");
	$city_array=mysqli_fetch_assoc($city_query);
	$city=$city_array['city'];
	
	$state_query=mysqli_query($link,"SELECT `state` FROM `resume` where `rollno`='$rollno'");
	$state_array=mysqli_fetch_assoc($state_query);
	$state=$state_array['state'];
	
	$country_query=mysqli_query($link,"SELECT `country` FROM `resume` where `rollno`='$rollno'");
	$country_array=mysqli_fetch_assoc($country_query);
	$country=$country_array['country'];
	
	$pin_query=mysqli_query($link,"SELECT `pin` FROM `resume` where `rollno`='$rollno'");
	$pin_array=mysqli_fetch_assoc($pin_query);
	$pin=$pin_array['pin'];
			
	$name_query=mysqli_query($link,"SELECT `fullname` FROM `resume` where `rollno`='$rollno'");
	$name_array=mysqli_fetch_assoc($name_query);
	$name=$name_array['fullname'];
	
	$mobileno_query=mysqli_query($link,"SELECT `mobile` FROM `resume` where `rollno`='$rollno'");
	$mobileno_array=mysqli_fetch_assoc($mobileno_query);
	$mobileno=$mobileno_array['mobile'];
	
	$email_query=mysqli_query($link,"SELECT email FROM `resume` where `rollno`='$rollno'");
	$email_array=mysqli_fetch_assoc($email_query);
	$email=$email_array['email'];	
	
	$website_query=mysqli_query($link,"SELECT `website` FROM `resume` where `rollno`='$rollno'");
	$website_array=mysqli_fetch_assoc($website_query);
	$website=$website_array['website'];
	
	$linkedin_query=mysqli_query($link,"SELECT `linkedin` FROM `resume` where `rollno`='$rollno'");
	$linkedin_array=mysqli_fetch_assoc($linkedin_query);
	$linkedin=$linkedin_array['linkedin'];
	
	$github_query=mysqli_query($link,"SELECT `github` FROM `resume` where `rollno`='$rollno'");
	$github_array=mysqli_fetch_assoc($github_query);
	$github=$github_array['github'];
	
	$careerobjective_query=mysqli_query($link,"SELECT `careerobjective` FROM `resume` where `rollno`='$rollno'");
	$careerobjective_array=mysqli_fetch_assoc($careerobjective_query);
	$careerobjective=$careerobjective_array['careerobjective'];
	
	$betotal_query=mysqli_query($link,"SELECT `betotal` FROM `resume` where `rollno`='$rollno'");
	$betotal_array=mysqli_fetch_assoc($betotal_query);
	$betotal=$betotal_array['betotal'];
	
	$becollege_query=mysqli_query($link,"SELECT `becollege` FROM `resume` where `rollno`='$rollno'");
	$becollege_array=mysqli_fetch_assoc($becollege_query);
	$becollege=$becollege_array['becollege'];
	
	$beyear_query=mysqli_query($link,"SELECT `beyear` FROM `resume` where `rollno`='$rollno'");
	$beyear_array=mysqli_fetch_assoc($beyear_query);
	$beyear=$beyear_array['beyear'];
	
	$preuniversitymarks_query=mysqli_query($link,"SELECT `preuniversitymarks` FROM `resume` where `rollno`='$rollno'");
	$preuniversitymarks_array=mysqli_fetch_assoc($preuniversitymarks_query);
	$preuniversitymarks=$preuniversitymarks_array['preuniversitymarks'];
	
	$pucollege_query=mysqli_query($link,"SELECT `pucollege` FROM `resume` where `rollno`='$rollno'");
	$pucollege_array=mysqli_fetch_assoc($pucollege_query);
	$pucollege=$pucollege_array['pucollege'];
	
	$puuniversity_query=mysqli_query($link,"SELECT `puuniversity` FROM `resume` where `rollno`='$rollno'");
	$puuniversity_array=mysqli_fetch_assoc($puuniversity_query);
	$puuniversity=$puuniversity_array['puuniversity'];
	
	$puyear_query=mysqli_query($link,"SELECT `puyear` FROM `resume` where `rollno`='$rollno'");
	$puyear_array=mysqli_fetch_assoc($puyear_query);
	$puyear=$puyear_array['puyear'];
	
	$sslcmarks_query=mysqli_query($link,"SELECT `sslcmarks` FROM `resume` where `rollno`='$rollno'");
	$sslcmarks_array=mysqli_fetch_assoc($sslcmarks_query);
	$sslcmarks=$sslcmarks_array['sslcmarks'];
	
	$school_query=mysqli_query($link,"SELECT `school` FROM `resume` where `rollno`='$rollno'");
	$school_array=mysqli_fetch_assoc($school_query);
	$school=$school_array['school'];
	
	$schoolboard_query=mysqli_query($link,"SELECT `schoolboard` FROM `resume` where `rollno`='$rollno'");
	$schoolboard_array=mysqli_fetch_assoc($schoolboard_query);
	$schoolboard=$schoolboard_array['schoolboard'];
	
	$sslcyear_query=mysqli_query($link,"SELECT `sslcyear` FROM `resume` where `rollno`='$rollno'");
	$sslcyear_array=mysqli_fetch_assoc($sslcyear_query);
	$sslcyear=$sslcyear_array['sslcyear'];
	
	$project1_query=mysqli_query($link,"SELECT `project1` FROM `resume` where `rollno`='$rollno'");
	$project1_array=mysqli_fetch_assoc($project1_query);
	$project1=$project1_array['project1'];
	
	$project1abstract_query=mysqli_query($link,"SELECT `project1abstract` FROM `resume` where `rollno`='$rollno'");
	$project1abstract_array=mysqli_fetch_assoc($project1abstract_query);
	$project1abstract=$project1abstract_array['project1abstract'];
	
	$project2_query=mysqli_query($link,"SELECT `project2` FROM `resume` where `rollno`='$rollno'");
	$project2_array=mysqli_fetch_assoc($project2_query);
	$project2=$project2_array['project2'];
	
	$project2abstract_query=mysqli_query($link,"SELECT `project2abstract` FROM `resume` where `rollno`='$rollno'");
	$project2abstract_array=mysqli_fetch_assoc($project2abstract_query);
	$project2abstract=$project2abstract_array['project2abstract'];
	
	$project3_query=mysqli_query($link,"SELECT `project3` FROM `resume` where `rollno`='$rollno'");
	$project3_array=mysqli_fetch_assoc($project3_query);
	$project3=$project3_array['project3'];
	
	$project3abstract_query=mysqli_query($link,"SELECT `project3abstract` FROM `resume` where `rollno`='$rollno'");
	$project3abstract_array=mysqli_fetch_assoc($project3abstract_query);
	$project3abstract=$project3abstract_array['project3abstract'];
	
	$project4_query= mysqli_query($link,"SELECT `project4` FROM `resume` where `rollno`='$rollno'");
	$project4_array=mysqli_fetch_assoc($project4_query);
	$project4=$project4_array['project4'];
	
	$project4abstract_query= mysqli_query($link,"SELECT `project4abstract` FROM `resume` where `rollno`='$rollno'");
	$project4abstract_array=mysqli_fetch_assoc($project4abstract_query);
	$project4abstract=$project4abstract_array['project4abstract'];
	
	$programming_query= mysqli_query($link,"SELECT `programming` FROM `resume` where `rollno`='$rollno'");
	$programming_array=mysqli_fetch_assoc($programming_query);
	$programming=$programming_array['programming'];
	
	$web_query= mysqli_query($link,"SELECT `web` FROM `resume` where `rollno`='$rollno'");
	$web_array=mysqli_fetch_assoc($web_query);
	$web=$web_array['web'];
	
	$tools_query= mysqli_query($link,"SELECT `tools` FROM `resume` where `rollno`='$rollno'");
	$tools_array=mysqli_fetch_assoc($tools_query);
	$tools=$tools_array['tools'];
	
	$os_query= mysqli_query($link,"SELECT `os` FROM `resume` where `rollno`='$rollno'");
	$os_array=mysqli_fetch_assoc($os_query);
	$os=$os_array['os'];
	
	$extra1_query= mysqli_query($link,"SELECT `extra1` FROM `resume` where `rollno`='$rollno'");
	$extra1_array=mysqli_fetch_assoc($extra1_query);
	$extra1=$extra1_array['extra1'];
	
	$extra2_query= mysqli_query($link,"SELECT `extra2` FROM `resume` where `rollno`='$rollno'");
	$extra2_array=mysqli_fetch_assoc($extra2_query);
	$extra2=$extra2_array['extra2'];
	
	$extra3_query= mysqli_query($link,"SELECT `extra3` FROM `resume` where `rollno`='$rollno'");
	$extra3_array=mysqli_fetch_assoc($extra3_query);
	$extra3=$extra3_array['extra3'];
	
	$fathersname_query= mysqli_query($link,"SELECT `fathersname` FROM `resume` where `rollno`='$rollno'");
	$fathersname_array=mysqli_fetch_assoc($fathersname_query);
	$fathersname=$fathersname_array['fathersname'];
	
	$mothersname_query= mysqli_query($link,"SELECT `mothersname` FROM `resume` where `rollno`='$rollno'");
	$mothersname_array=mysqli_fetch_assoc($mothersname_query);
	$mothersname=$mothersname_array['mothersname'];
	
	$gender_query= mysqli_query($link,"SELECT `gender` FROM `resume` where `rollno`='$rollno'");
	$gender_array=mysqli_fetch_assoc($gender_query);
	$gender=$gender_array['gender'];
	
	$dd_query= mysqli_query($link,"SELECT `dd` FROM `resume` where `rollno`='$rollno'");
	$dd_array=mysqli_fetch_assoc($dd_query);
	$dd=$dd_array['dd'];
	
	$mm_query= mysqli_query($link,"SELECT `mm` FROM `resume` where `rollno`='$rollno'");
	$mm_array=mysqli_fetch_assoc($mm_query);
	$mm=$mm_array['mm'];
	
	$yyyy_query= mysqli_query($link,"SELECT `yyyy` FROM `resume` where `rollno`='$rollno'");
	$yyyy_array=mysqli_fetch_assoc($yyyy_query);
	$yyyy=$yyyy_array['yyyy'];
	
	$nationality_query= mysqli_query($link,"SELECT `nationality` FROM `resume` where `rollno`='$rollno'");
	$nationality_array=mysqli_fetch_assoc($nationality_query);
	$nationality=$nationality_array['nationality'];
	
	$maritalstatus_query= mysqli_query($link,"SELECT `maritalstatus` FROM `resume` where `rollno`='$rollno'");
	$maritalstatus_array=mysqli_fetch_assoc($maritalstatus_query);
	$maritalstatus=$maritalstatus_array['maritalstatus'];
	
	$languagesknown_query= mysqli_query($link,"SELECT `languagesknown` FROM `resume` where `rollno`='$rollno'");
	$languagesknown_array=mysqli_fetch_assoc($languagesknown_query);
	$languagesknown=$languagesknown_array['languagesknown'];
	
	$declaration_query= mysqli_query($link,"SELECT `declaration` FROM `resume` where `rollno`='$rollno'");
	$declaration_array=mysqli_fetch_assoc($declaration_query);
	$declaration=$declaration_array['declaration'];
	
	if(!mysqli_query($link,$query)){
		die('Error: ' . mysqli_error($link));
	}
	
	
	echo "<!DOCTYPE html><html><head>";
	echo "<title>$rollno</title><link rel='stylesheet' type='text/css' href='print.css' media='all'></head>";
	echo "<body>";
	echo "<div class='header'>";
	
	echo "<h2>";
		if($hno!=NULL)
		{
			echo "$hno<br>";
		}
		if ($street!=NULL);
		{
			echo "$street<br>";
		}
		echo "$city<br>";
		echo "$state<br>";
		echo "$country-$pin";
	echo"</h2>";
	echo "<h1>$name</h1>";
		echo "<h4>";
			echo "(+91)$mobileno<br>";
			echo "$email<br>";
			if($website!=NULL)
			{
				echo "$website<br>";
			}
			if($linkedin!=null)
			{
				echo "$linkedin<br>";
			}
			if($github!=null)
			{
				echo "$github";
			}
		echo "</h4>";
		
	echo "</div><hr>";

	echo "<div class='careerobjective'>";
		echo "<h3>Career Objective</h3>";
		echo "<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$careerobjective</p>";
	echo "</div>";

	echo "<div class='educationdetails'>";
		echo "<h3>Education</h3>";
		echo "<table class='education'>";
		echo "<tr><th>Course</th><th>Institution</th><th>University/Board</th><th>Aggregate</th><th>Year of Completion</th></tr>";
		echo "<tr> <td>B.E</td> <td>$becollege</td> <td>$betotal</td> <td>$beyear</td> </tr>";
		echo "<tr> <td>2nd PUC/ 12th</td> <td>$pucollege</td> <td>$puuniversity</td> <td>$preuniversitymarks</td> <td>$puyear</td> </tr>";
		echo "<tr> <td>SSLC/10th</td> <td>$school</td> <td>$schoolboard</td> <td>$sslcmarks</td> <td>$sslcyear</td> </tr>";
		echo "</table>";
	echo "</div>";
	
	
	if($project1 !=NULL || $project2 !=NULL || $project2 !=NULL || $project3 !=NULL || $project4 !=NULL || $project1abstract!=NULL || $project2abstract!=NULL || $project3abstract!=NULL || $project4abstract!=NULL)
	{
		echo "<h3>Technical Experience</h3>";
	echo "<div class='projects'>";
		if($project1 !=NULL || $project2 !=NULL || $project2 !=NULL || $project3 !=NULL || $project4 !=NULL || $project1abstract!=NULL || $project2abstract!=NULL || $project3abstract!=NULL || $project4abstract!=NULL)
		{
			echo "<b>&nbsp;&nbsp;Projects&nbsp;</b>:";
			echo "<ul>";
			if($project1 !=NULL){
			echo "<li><b>$project1</b></li>";
			echo "<br>&nbsp;&nbsp;$project1abstract";
			}
			if($project2 !=NULL){
			echo "<li><b>$project2</b></li>";
			echo "<br>&nbsp;&nbsp;$project2abstract";
			}
			if($project3 !=NULL){
			echo "<li><b>$project3</b></li>";
			echo "<br>&nbsp;&nbsp;$project3abstract";
			}
			if($project4 !=NULL){
			echo "<li><b>$project4</b></li>";
			echo "<br>&nbsp;&nbsp;$project4abstract<br>";
			}
			echo "</ul>";
		}
	echo "</div>";
	}
	
	echo "<div class='technicalskills'>";
	if($programming !=NULL || $web !=NULL || $tools!=NULL || $os !=NULL)
	{
		echo "<h3>Technical Skills</h3>";
		
	echo "<table class='technical'>";
		if($programming !=NULL)
		{
			echo "<tr> <th>Programming Languages</th> <td>:</td> <td>$programming</td> </tr>";
		}
		if($web !=NULL)
		{
			echo "<tr> <th>Web Technologies</th> <td>:</td> <td>$web</td> </tr>";
		}
		if($tools!=NULL)
		{
			echo "<tr> <th>Tools & Frameworks</th> <td>:</td> <td>$tools</td> </tr>";
		}
		if($os !=NULL)
		{
			echo "<tr> <th>Operating Systems</th> <td>:</td> <td>$os</td> </tr>";
		}
	echo "</table>";
	}
	echo "</div>";
	
		
	echo "<div class='extra'>";
	if($extra1 !=NULL || $extra2 !=NULL || $extra3 !=NULL)
	{
		echo "<h3>Extra-Curricular Activities</h3>";
		if($extra1 !=NULL){
			echo "<ul><li>$extra1</li>";
		}
		if($extra2 !=NULL){
			echo "<li>$extra2</li>";
		}
		if($extra3 !=NULL){
			echo "<li>$extra3</li>";
		}
	}
	echo "</div>";
	
	echo "<div class='personal'>";
		echo "<h3>Personal Details</h3>";
		echo "<table class='personaldetails'>";
		echo "<tr> <th>Father's Name</th> <td>:</td> <td>$fathersname</td> </tr>";
		echo "<tr> <th>Mother's Name</th> <td>:</td> <td>$mothersname</td> </tr>";
		echo "<tr> <th>Sex</th> <td>:</td> <td>$gender</td> </tr>";
		echo "<tr> <th>Date of Birth</th> <td>:</td> <td> $dd / $mm / $yyyy </td> </tr>";
		echo "<tr> <th>Nationality</th> <td>:</td> <td>$nationality</td> </tr>";
		echo "<tr> <th>Marital Status</th> <td>:</td> <td>$maritalstatus</td> </tr>";
		echo "<tr> <th>Languages Known</th> <td>:</td> <td>$languagesknown</td> </tr>";
		echo "</table>";
	echo "</div>";
	
	echo "<div class='declaration'>";
		echo "<h3>Declaration</h3>";
		echo "$declaration";
	echo "</div>";
	
	echo "<div class='footerleft'>";
		echo "<br><label>Date&nbsp;&nbsp;:&nbsp;</label>". date("d/m/Y");
		echo "<br>Place&nbsp;:&nbsp; Bengaluru";
	echo "</div>";
	echo "<div class='footerright'>";
		echo "<b>$name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>";
	echo "</div>";
	
	
?>
