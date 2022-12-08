
<?php include 'connection.php';?>

<?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];

            $sql = "INSERT INTO user (name,email,phone,password) values('$name', '$email', '$phone', '$password')";

            $result = mysqli_query($con, $sql);

            if ($result) {
                header('location:Student_Area/index.php');
            }else{
                die(mysqli_error($con));
            }

            
        }




?>




    <title>Join GUB Club</title>
  </head>
  <body>
    <div class="container my-5">

                <form method="post">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Enter Your name" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="number" class="form-control" placeholder="Enter Your phone number" name="phone">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Your Password" name="password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>


    </div>
