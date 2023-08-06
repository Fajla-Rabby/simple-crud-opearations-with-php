<?php
include 'conn.php';

$username = $_POST['username'];
$password = $_POST['password'];
$query = "select * from  crudtable";
// mysqli_query() Performs a query on the database
$sendQuery = mysqli_query($databaseConnection, $query);
?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <!-- Bootstrap cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="col-lg-12">
            <br>
            <h1 class="text-warning text-center">Display Table Data</h1>
            <br>
            <table class="table table-striped table-hover table-bordered">
                <tr class="text-center text-white">
                    <th>Id</th>
                    <th>User name</th>
                    <!-- <th>Email</th> -->
                    <th>Password</th>
                    <!-- <th>Profile picture</th> -->
                    <th>Delete</th>
                    <th>Update</th>
                </tr>

                <?php
                include 'conn.php';

                $query = "select * from  crudtable";
                // mysqli_query() Performs a query on the database
                $sendQuery = mysqli_query($databaseConnection, $query);
                //mysqli_fetch_array() Fetch the next row of a result set as an associative, a numeric array, or both
                while ($response = mysqli_fetch_array($sendQuery)) {
                
                ?>


                <tr class="text-center">
                    <td> <?php echo $response['id']; ?> </td>
                    <td> <?php echo $response['username']; ?> </td>
                    <!-- <td> <?php echo $response['email']; ?> </td> -->
                    <td> <?php echo $response['password']; ?> </td>
                    <td> <button class="btn-danger btn "> <a href = "delete.php?id=<?php echo $response['id']; ?>" class="text-white">Delete </a> </button></td>
                    <!-- <td> <?php echo $response['id'] ?></td> -->
                    <td> <button class="btn-primary btn"> <a href="update.php?id=<?php echo $response['id']; ?> "  class="text-white"> Update</a> </button></td>
                    <!-- <td> <?php echo $response['id'] ?></td> -->

                </tr>
                <?php
                }
                ?>

            </table>
        </div>
    </div>
</body>

</html>