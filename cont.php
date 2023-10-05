<?php
include("connect.php");
if(isset($_POST['submit']))
{
$a=$_POST['x'];
$b=$_POST['y'];
$c=$_POST['z'];
$d=$_POST['p'];
$C->query("Insert into contact values('$a','$b','$c','$d')");
?>


<script type="text/javascript">
	alert("Your Information Successfully Submit");
</script>
<?php
}
?>
