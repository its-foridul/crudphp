<?php

    include 'connect.php';


    $id = $_GET['updateid'];

    $sql = "SELECT * FROM crud where id=$id";

    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];



        if(isset($_POST['submitupdate'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $password = $_POST['password'];
    
            $sql = "UPDATE crud SET id=$id, name='$name', email='$email', mobile = '$mobile', password='$password' where id=$id";
    
            $result = mysqli_query($conn,$sql);
    
    
            if($result){
                header("location:display.php");
            }
            else{
                die(mysqli_error($conn));
            }
    
            
        }




    

?>







<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Crud Operation</title>
</head>



<body>






    <div class="container my-5">
    <br><h2>---Update Data---</h2><br>
        <form method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name: </label>
                <input type="text" value=<?php echo $name;?> class="form-control" placeholder="Enter your name.." name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email: </label>
                <input type="email" value=<?php echo $email;?> class="form-control" placeholder="Your email address.." name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile: </label>
                <input type="text" value=<?php echo $mobile;?> class="form-control" placeholder="Provide a Phone Number.." name="mobile" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password: </label>
                <input type="password" value=<?php echo $password;?> class="form-control" placeholder="Set a Password.." name="password" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <button type="submit" name="submitupdate" class="btn btn-primary">Update</button>
            <button type="reset" name="reset" class="btn btn-primary">Reset</button> <br> <br>

            <button type="submit" name="select" class="btn btn-success"><a class = "text-white text-decoration-none" href="display.php">View List</a></button>
        </form>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>


</body>

</html>





 