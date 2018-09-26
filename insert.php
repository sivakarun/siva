<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
  $r=$_POST['name'];
  $rr=$_POST['username'];
  $n=$_POST['father'];
  $s=$_POST['mother'];
  $m=$_POST['dob'];
  $m2=$_POST['gender'];
 
  $t=$_POST['mobile'];
  $t1=$_POST['email'];

  $from = new DateTime($m);
$to   = new DateTime('today');


 $m3= $from->diff($to)->y;

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
      $a="INSERT INTO detail(name,username,father,mother,dob,gender,age,mobile,email) VALUES('$r','$rr','$n','$s','$m','$m2','$m3','$t','$t1')";
        
  		if (!mysqli_query($con,$a))
		{
			die('Error:');
		}
		else
		{
			echo "<script>
					alert('1 record added');
					
			  </script>";
			  	
			  include 'main.php';
		} 		
?>
</body>
</html>


