<!DOCTYPE html>
<html lang="en">

<head>
    <title>Forms</title>
    <?php include 'link.php' ?>
</head>

<body>
    <div class="container">
        <div class="container register">
            <div class="row">
                <div class="col-md-3 register-left img">
                    <img src="https://images.unsplash.com/photo-1557682250-33bd709cbe85?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Ymx1ZSUyMGFuZCUyMHB1cnBsZSUyMGdyYWRpZW50fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&w=1000&q=80"
                        alt="" class="img" />
                </div>
                <div class="col-md-9 register-right">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading text-primary">Apply as a Employee</h3>
                            <form action="" method="post">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Enter Your Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="degree" class="form-control"
                                                placeholder="Your Qualification *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="mobile" class="form-control"
                                                placeholder="Mobile Number *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control"
                                                placeholder="Email ID *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="refer" class="form-control"
                                                placeholder="Reference *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="jobpost" class="form-control"
                                                placeholder="Job Post " value="" />
                                        </div>

                                    </div>
                                    <input type="submit" class="btnRegister" name="submit" value="Register" />
                                    <div class="db-btn">
                                        <a href="display.php"><i class="fas fa-database fa-5x"></i></a>
                                    </div>

                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</body>

</html>

<?php


include 'connection.php';

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $degree= $_POST['degree'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $refer = $_POST['refer'];
    $jobpost = $_POST['jobpost'];


    $insertquery = "INSERT INTO `jobregisteration`(`name`, `degree`, `mobile`, `email`, `refer`, `jobpost`) VALUES ('$name','$degree','$mobile','$email','$refer','$jobprofile')";
    
    $resultInserted = mysqli_query($con, $insertquery);

    if($resultinserted){
        ?>
<script>
alert('Data is  Inserted')
</script>
<?php
    }else{
        {
            ?>
<script>
alert('Data is is Inserted')
</script>
<?php
        }
    }
}

?>