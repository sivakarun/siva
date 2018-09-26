<?php
  $r=$_POST['uname'];
  $n=$_POST['gmail'];
  $s=$_POST['pass'];
  $m=$_POST['pass1'];
  $con=mysqli_connect("localhost","root","");
  		if ($con)
  		{
  	  		print "connected";
  		}
  		else
  		{
  			print "not connected";
  		}
  $c=mysqli_select_db($con,"siva");
    	if ($c)
      		{
          	print " db_connected";
      		}
      	else
      		{
        	print "db_notconnected";
      		}
if($r<5||$r>15)
{
	if($s==$m)
	{
      $a="INSERT INTO signup(username,gmail,password,confirmpassword) VALUES('$r','$n','$s','$m')";

  		if (!mysqli_query($con,$a))
		{
			die('Error: ' . mysqli_error());
		}
		else
		{
			echo "<script>
					alert('1 record added');
					
			  </script>";
			  	
			  header("Location:login.html");
		}
	}
	else{
		echo"<script>
		 alert('please the name should same');
		 </script>";
		 
		}
	}
	else{
		echo"<script>
		 alert('please the password should same');
		 </script>";
		  
		}
 		
?>

