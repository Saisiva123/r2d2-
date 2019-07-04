<!DOCTYPE html>
<html>
<head>
<style>
	.one
	{
		display:inline;
		position: relative;
		left:30%;
		top:30%;
		background-color: linear-gradient(to right,yellow,pink);
		height:30px;
	}
</style>
</head>
<body>
<div class="one">
<?php
if(isset($_POST['submit']))
{
	$x=$_POST['input'];
	echo "This page contains detail information about ".$x." movie";
}
?>
</div>
</body>
</html>