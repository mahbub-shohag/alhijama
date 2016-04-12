<link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
<?php
include_once('../../../../connectiondb.php');

if(isset($_POST['save']))
{
	$name=$_POST['name'];
	echo $name;
}


$id=$_GET['id'];
$query="select * from menu where id=".$id;
$result=mysql_query($query);
while ($category=mysql_fetch_assoc($result)) {
	
	$name=$category['name'];

echo $name;
 echo "<form method='post' action='menuedit.php' class='form-inline'>";
 echo "<div class='form-group'>";
 echo "<label for='exampleInputName2'>Name</label>";
 echo "<input type='text' class='form-control' id='exampleInputName2' name='name' value=".$name.
   ">";
   echo "<br>";
  echo "<button type='submit' name='save' class='btn btn-default'>Send invitation</button>
  </form>";
}
?>