<h1> Mysql Connection </h1>
<?php

 echo "<br/>";
  echo   $dbhost = "localhost";
	  echo "<br/>";
     echo  $dbuser = 'preeti1124';
	  echo "<br/>";
         $dbpass = '11241124';
		  $dbname = 'flame';
         mysql_connect($hostname,$username, $password) or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
		 mysql_select_db($dbname);
         if(!$conn) {
			 die("Could not connect: " . mysql_error());
         } else {
         echo "Connected successfully";
		 } 

?>
