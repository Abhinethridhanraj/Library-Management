<?php
      $a=$_REQUEST["name"];
	  $b=$_REQUEST["type"];
	  $c=$_REQUEST["qty"];
	  $con=mysql_connect("localhost","root","");
	  mysql_select_db("gowsika");
	  mysql_query("insert into web(name,type,qty) values('$a','$b','$c')");
	  echo("order Successfully placed");
	 
	  include("borrow1.php");
	  mysql_close($con);
   ?>