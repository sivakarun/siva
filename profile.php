<?php
session_start();
 if(!$_SESSION["name"])
   {
    header("location: signin.php");
   }
?> 
<?php
 if(!isset($_SESSION["count"]))
{
    
    $_SESSION["count"]=0;
}
else
{
    $_SESSION["count"]++;
    
}
echo "<p> In this session you have accessed this page ". $_SESSION["count"]. "times.</p>";
$con=mysqli_connect("localhost","root","");
        if ($con)
        {
            print "connected";
        }
        else
        {
            print "notconnected";
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
 $sql= "SELECT username,gmail FROM signup ";
   $search_query=mysqli_query($con,$sql);
  while($rowvalue=mysqli_fetch_assoc($search_query))
  {
    $r=$rowvalue['username'];
    $n=$rowvalue['gmail']; 
  }

  mysqli_close($con);
?>
<html>
<head><title>insert page</title>
<style>
			body{
		background-image:url("2.jpg");
	}
			.ss1{
    font-family: 'Ubuntu', 'Lato', sans-serif;
    font-weight: 400;
    width: 300px;
    position: relative;
    margin: 200px auto 80px;
    margin-left: 600px;
    padding: 30px;
    overflow: hidden;
    background: #111; 
    border-radius: 0.4em;
    border: 1px solid #191919;
    box-shadow: 
        inset 0 0 2px 1px rgba(255,255,255,0.08), 
        0 16px 10px -8px rgba(0, 0, 0, 0.6);
}
.ss1 label{
    width: 50%;

    padding-top: 9px;
    color: #ddd;
    font-size: 12px;
    text-transform: uppercase;
    letter-spacing: 1px;
    text-shadow: 0 1px 0 #000;
    text-indent: 10px;
    font-weight: 700;
    cursor: pointer;
}
			.ss1 p{
				font-family:'Ubuntu', 'Lato', sans-serif; 
				font-size:18px;
				text-align: center;
				background-color:	#A0522D ;
				font-color: white;
				height: 50px;
			}
			.ss1 ul li{
				list-style-type:none;
			
			}
	
</style>
</script>
</head>
<body>
<form  action="" method="post">
<div class="ss1">
<p font-color="white">Insert page</p>
<ul><li><label>Name:<br><input type="text" name="name" required></label></li>
    <li><label>UserName:<br><input type="text" name="username" value='<?php echo $r;?>' required></label></li>
    <li><label>Father's Name:<br><input type="text" name="father"  required></label></li>
<li><label>Mother's Name:<br><input type="text" name="mother"  required></label></li>
<li><label>DOB:<br><input type="date" name="dob" id="Nam" required></label></li>
<li><label>Gender:<br><input type="text" name="gender"  required></label></li>
<li><label>Mobile no:<br><input type="text" name="mobile"  required></label></li>
<li><label>Gmail:<br><input type="text" name="email"value='<?php echo $n;?>'  required></label></li>
</ul><br><center><input type="Submit" value="Submit" formaction="insert.php"></center>
</div></body>
</html>