<?php
include("connect.php");
if(isset($_POST['submit']))
{
$a=$_POST['r'];
$b=$_POST['s'];
$c=$_POST['t'];
$d=$_POST['u'];
$e=$_POST['v'];
$f=$_POST['w'];



$C->query("Insert into career values('$a','$b','$c','$d','$e','$f')");
?>


<script type="text/javascript">
	alert("Your Information Successfully Submit");
</script>
<?php
}
?>
