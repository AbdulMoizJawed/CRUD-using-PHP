<!DOCTYPE html>

<head>
    <title></title>
    <?php include 'link.php' ?>

</head>

<body>
    <div class="main-div">
        <h1>All Applications</h1>
    </div>
    <div class="center-div">
        <div class='table-responsive'>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Degree</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">email</th>
                        <th scope="col">refer</th>
                        <th scope="col">Post</th>
                        <th scope="col" colspan=2>Operation</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
            include 'connection.php';
            include 'link.php';

            $selectquery= "SELECT * FROM jobregisteration";

            $query = mysqli_query($con,$selectquery);


            // $data = mysqli_fetch_array($query);

            while($data = mysqli_fetch_array($query)){
                ?>
                    <tr>
                        <th> <?php echo $data['id'];?> </th>
                        <td> <?php echo $data['name'];?> </td>
                        <td> <?php echo $data['degree'];?> </td>
                        <td> <?php echo $data['mobile'];?> </td>
                        <td> <span class='email-style'><?php echo $data['email'];?> </span> </td>
                        <td> <?php echo $data['refer'];?> </td>
                        <td> <?php echo $data['jobpost'];?> </td>

                        <td><a href="update.php?id=<?php echo $data['id'] ?>" data-toggle="tooltip"
                                data-placement="bottom" title="Update"><i class="fas fa-edit "></i></a> </td>
                        <td><a href="delete.php?id=<?php echo $data['id'] ?>" data-toggle="tooltip"
                                data-placement="bottom" title="Delete"><i class="fas fa-trash "></i></a> </td>

                    </tr>
                </tbody>
                <?php
            }

            ?>

            </table>


        </div>
    </div>

    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</body>

</html>