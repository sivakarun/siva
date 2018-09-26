 <?php 

   session_start(); 
   
   echo "Welcome to the main page:";
   echo $_SESSION["name"];
   if(!$_SESSION["name"])
   {
   	header("location: signin.php");
   }
 if(!isset($_SESSION["count"]))
{
	
	$_SESSION["count"]=0;
}
else
{
	$_SESSION["count"]++;
	
}
echo "<p> In this session you have accessed this page ". $_SESSION["count"]. "times.</p>";
?>
<html>
<head>
<style>
body{
		
		background-image:url("2.jpg");
	}
			.ss{
    font-family: 'Ubuntu', 'Lato', sans-serif;
    font-weight: 400;
    width: 300px;
    position: relative;
    margin: 200px auto 80px;
    margin-left: 600px;
    padding: 10px;
    overflow: hidden;
    background: #111; 
    border-radius: 0.4em;
    border: 1px solid #191919;
    box-shadow: 
        inset 0 0 2px 1px rgba(255,255,255,0.08), 
        0 16px 10px -8px rgba(0, 0, 0, 0.6);
}
.ss label{
    width: 50%;
    float: left;
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
			.ss p{
				font-family:'Ubuntu', 'Lato', sans-serif; 
				font-size:18px;
				text-align: center;
				background-color:	#A0522D ;
				font-color: white;
				height: 50px;
			}
			.ss ul li{
				list-style-type:none;
				margin-left:30px;
			}
			#foot
	{
		height: 40px;
		width: 100;
		bottom:  0;
		right: 0;
		left: 0;
		position: fixed;
		background-color:black;
	}
	#head
	{
		height: 50px;
		width: 100;
		top: 0;
		right: 0;
		left: 0;
		position: fixed;
		background-color:black;
	}
	</style>
<body>
<form action="" method="">
<div class="ss">
<p>home page</p>
<br>
<ul>
	<li><input type="Submit" value="Profile" formaction="profile.php" ></li><br>
	<li><input type="Submit" value="ChangePassword" formaction="change.php"></li><br>
	<li><input type="Submit" value="Logout" formaction="logout.php"></li>
</ul><br>
</div>
</form>
</body>
</html>

