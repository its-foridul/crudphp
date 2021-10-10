<?php 

    $conn = new mysqli('localhost', 'root', 'root','crudoperation');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }




    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        $sql = ("INSERT INTO crud (name, email, mobile, password) values ('$name', '$email', '$mobile', '$password')");

        $result = mysqli_query($conn,$sql);


        if($result){
            header("location:display.php");
        }
        else{
            die(mysqli_error($conn));
        }



        
    }







   


    
?>