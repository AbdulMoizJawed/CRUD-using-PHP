<?php
    include 'connection.php';
    $del_id = $_GET['id'];

    $deletequery ="DELETE FROM `jobregisteration` WHERE id=$del_id";
    
    $query = mysqli_query($con , $deletequery);

    
    if($query){
        ?>
<script>
alert('Deleted');
</script>
<?php } else{
    ?>
<script>
alert('Deleted');
</script>
<?php 
} header('location:display.php'); ?>