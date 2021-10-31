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
                            <h3 class="register-heading text-primary">Update Data</h3>
                            <form action="" method="post">
                                <div class="row register-form">


                                    <?php
                                    include 'connection.php';
                                    include 'link.php';
                                    $ids = $_GET['id'];

                                    $showquery = "SELECT * FROM jobregisteration WHERE id={$ids}";

                                    $showdata = mysqli_query($con,$showquery);

                                    $arrdata= mysqli_fetch_array($showdata);
                                    
                            
                                    
                                    if(isset($_POST['submit'])){
                                    
                                    $idupdate = $_GET['id'];

                                    $name = $_POST['name'];
                                    $degree= $_POST['degree'];
                                    $mobile = $_POST['mobile'];
                                    $email = $_POST['email'];
                                    $refer = $_POST['refer'];
                                    $jobpost = $_POST['jobpost'];


                                    $query = "UPDATE `jobregisteration` SET `id`='$idupdate',`name`='$name',`degree`='$degree',`mobile`='$mobile',`email`='$email',`refer`='$refer',`jobpost`='$jobpost' WHERE id='$idupdate'";
                                    $res= mysqli_query($con, $query);
                                    if($res){
                                        ?>
                                    <script>
                                    alert('Data Updated')
                                    </script>
                                    <?php
                                    }else{
                                        
                                            ?>
                                    <script>
                                    alert('Data Not Updated')
                                    </script>
                                    <?php

                                    }
                                }
                                        ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Enter Your Name *"
                                                value="<?php echo $arrdata['name'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="degree" class="form-control"
                                                placeholder="Your Qualification *"
                                                value="<?php echo $arrdata['degree'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="mobile" class="form-control"
                                                placeholder="Mobile Number *"
                                                value="<?php echo $arrdata['mobile'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control"
                                                placeholder="Email ID *" value="<?php echo $arrdata['email'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="refer" class="form-control"
                                                placeholder="Reference *" value="<?php echo $arrdata['refer'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="jobpost" class="form-control"
                                                placeholder="Job Post " value="<?php echo $arrdata['jobpost'];?>" />
                                        </div>

                                    </div>
                                    <input type="submit" class="btnRegister" name="submit" value="update" />
                                    <div class="db-btn">
                                        <a href="display.php"><i class="fas fa-database fa-5x"></i></a>
                                    </div>
                                    <div class="home-btn">
                                        <a href="index.php"><i class="fas fa-home fa-5x"></i></a>
                                    </div>
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