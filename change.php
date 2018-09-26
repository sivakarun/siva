<?php
        session_start();
        if(!isset($_SESSION['name']))
        {
                header("location: login.html");
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
  $r=$_POST['uname'];
  $n=$_POST['oldpassword'];
  $s=$_POST['newpassword'];
  $m=$_POST['confirmpassword'];
  if($r==""||$n==""||$s==""||$n=="")
  {


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
     $sql= "SELECT username,password FROM signup where username='$r' and password ='$n' ";
   $search_query=mysqli_query($con,$sql);
  while($rowvalue=mysqli_fetch_assoc($search_query))
  {
   
    $o=$rowvalue['username'];
    $u=$rowvalue['password'];
  if($n != $u || $r != $o)
        {
          
          echo 'hello';
        }
 else{ 
$sql = "UPDATE signup SET  password='$s' where username='$o' and password='$u'";
$search_query=mysqli_query($con,$sql);
}}

} else{
   echo "<script>
          alert('1 record added');
          
        </script>";
}
mysqli_close($con);

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
        background-color: #A0522D ;
        font-color: white;
        height: 50px;
      }
      .ss ul li{
        list-style-type:none;
        margin-left:30px;
      }

</style>
  </head>
  <body>
  <form action="" method="post" >
    <div class="ss">
      <p>Sign_up</p>
    <ul>
    <li><label>Username:<input type="text" name="uname" placeholder="UserName" /></label></li><br>
      <li><label>Oldpassword:<br><input type="text" name="oldpassword" placeholder="oldpassword" /></label></li><br>
      <li><label>NewPassword:<input type="text" name="newpassword" placeholder="Newpassword" /></label></li><br>
      <li><label>ConfirmPassword:<input type="text" name="confirmpassword" placeholder="ConfirmPassword"/></label></li><br>
      <center><input type="Submit" value="Submit">><input type="Submit" value="back" formaction="main.php">
</form>
  </body>
  </html>


