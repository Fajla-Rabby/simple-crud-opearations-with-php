<?php
    include 'conn.php';

if (isset($_POST['done'])) {
    $id = $_GET['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "update crudtable set id = $id, username =' $username', password = '$password' where id = $id ";
    $sendQuery = mysqli_query($databaseConnection, $query);

    header('location: display.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <!-- Bootstrap cdn link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  
    </head>
    <body>

    <div class="col-lg-6 m-auto">
        <form name="myForm" action="" method="post" onsubmit = "return validateForm()" enctype="multipart/form-data" >
            <br>
            <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Update Operation</h1>
                </div>

                <label for="">Username:</label>
                <input class="form-control" type="text" name="username">
                <br>

                <label for="">Email:</label>
                <input class="form-control" type="email" name="email">
                <br>

                <label for="">Password:</label>
                <input class="form-control" type="password" name="password">
                <br>

                <label for="">Select your image:</label>
                <input type="file" name="file" id="file" class="form-control">
                <br>



                <button class="btn btn-success w-25" type="submit" name="done"> Submit </button>
                <br>

            </div>

        </form>
    </div>




    <!-- js file link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>