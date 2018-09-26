<?php
session_start();
                if(isset($_SESSION['name']))
                {
                session_destroy();
                }
                echo '<h1>You have been successfully logout</h1>';
                echo "<a href='login.html'>logout</a>";
?>