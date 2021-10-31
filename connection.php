<?php

$username = "root";
$password = "";
$server = 'localhost';
$db= 'crud';


$con = mysqli_connect($server,$username,$password,$db);
if ($con) {
    ?>
<script>
alert("Database Connected Successfully")
</script>
<?php
}else{
die('Dataase bConnection failed : '.mysqli_connect_error());
}
// $con = mysqli_connect($server,$username,$password);

// $db = mysqli_connect_db($con,$database);
?>