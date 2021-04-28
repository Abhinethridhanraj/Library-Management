<?php include ("head.html")
?>
<body>
<div class="borrow">
<center>
<form action="borrow.php" method="post">
<br /><br /><br /><br /><br />
Name:<input type="text" size="40" name="name" />
<br /><br /><br />
Type:<select name="type">
<option value="comedy">COMEDY</option>
<option value="comics">COMICS</option>
<option value="study">STUDY</option>
<option value="fantasy">FANTASY</option>
</select>
<br /><br /><br />
Quantity:<input type="number" size="10" name="qty" />
<br /><br /><br />
<input type="submit" value="BORROW"/>
</form>
</center>
</div>
</body>
<?php include ("footer.html")
?>