<?php
        session_start();
         $_SESSION["name"]=$_POST["username"]; 
$a=$_POST['username'];
$b=$_POST['password'];
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
  $sql= "SELECT username,password FROM signup WHERE username = '$a'and password='$b' ";
   $search_query=mysqli_query($con,$sql);
  while($rowvalue=mysqli_fetch_assoc($search_query))
  {
    $r=$rowvalue['username'];
    $n=$rowvalue['password'];
   
  if($a==""||$b==""){ 
    echo "<script>
          alert('please fill your nameand password');
          </script>";
  if($r!==$a ||$n!==$b)
        {
          echo "<script>
          alert('the username and password not match');
          </script>";
        }
         }           
if(isset($_SESSION['page_count']))
{
     $_SESSION['page_count'] += 1;
}
else
{
     $_SESSION['page_count'] = 1;
}
 echo 'Welcome  ' . $_SESSION['name']."<br>".'you are visited this page'. $_SESSION['page_count'];
   include 'main.php';

  }
  
      
  mysqli_close($con);
          
  ?>

