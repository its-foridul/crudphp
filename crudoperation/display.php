<?php

include 'connect.php';


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


    <div class="container">
        <div class="py-5">

            <button name="button" class="btn btn-primary"> <a href="user.php" class="text-white text-decoration-none">Add User</a> </button>

        </div>


        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>

            <tbody>

                <?php

                $sql = "select * from crud";

                $result = mysqli_query($conn, $sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];

                        echo '<tr>
                                <th scope="row">' . $row['id'] . '</th>
                                <td>' . $name . '</td>
                                <td>' . $email . '</td>
                                <td>' . $mobile . '</td>
                                <td>' . $password . '</td>
                                <td>
                                <button name = "update"  class = "btn btn-primary"><a class = "text-white text-decoration-none" href ="update.php?updateid='.$id.'" >Update</a></button>
                                <button name = "delete" class = "btn btn-danger"><a class = "text-white text-decoration-none" href ="delete.php?deleteid='.$id.'">Delete</a></button>
                                </td>
                            </tr>
                        ';
                    }
                } else {
                    echo $conn->error;
                }

                ?>






            </tbody>
        </table>

    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
</body>

</html>