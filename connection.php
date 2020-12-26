<?php

$server="localhost";
$username="root";
$password="";
$db="mydata";
$conn=mysql_connect( $server ,$username ,$password,$db  );
if($conn)
{
?>
<script>
alert("connection successful");

</script>

<?php	
}
 
else{
 echo"no con";

}





 ?>


