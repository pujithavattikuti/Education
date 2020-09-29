<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $course = $_POST['course'];
    $address = $_POST['address'];
    $description = $_POST['description'];
    // $sql = "INSERT INTO 'gurushishya'.`studentdata` (`fname`, `lname`, `age`, `dob`, `gender`, `email`, `phone`, `course`, `address`, `description`, `dt`) VALUES ('$fname','$lname', '$age', '$dob','$gender', '$email', '$phone','$course' ,'$address','$description', current_timestamp());";
    $sql= "INSERT INTO 'gurushishya'.`studentdata` (`Sno.`, `fname`, `lname`, `age`, `dob`, `gender`, `email`, `phone`, `course`, `address`, `description`, `dt`) VALUES ('1', '$fname', '$lname', '$age', '$dob', '$gender', '$email', '$phone', '$course', '$address', '$description', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>
<!-- INSERT INTO `studentdata` (`Sno.`, `fname`, `lname`, `age`, `dob`, `gender`, `email`, `phone`, `course`, `address`, `description`, `dt`) VALUES ('1', 'chandan', 'kumar', '20', '18/02/2001', 'male', 'chandankumar1822001@gmail.com', '6301253897', 'cse', 'serikona', 'nothing', current_timestamp()); -->



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="form1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
            <h3>GURU <span>Shishya</span></h3>
        </div>
        <div class="right_area">
            <a href="#" class="logout_btn">Logout</a>
        </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
        <div class="nav_bar">
            <img src="logo.jpg" class="mobile_profile_image" alt="">
            <i class="fa fa-bars nav_btn"></i>
        </div>
        <div class="mobile_nav_items">
            <a href="index.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
            <a href="index.php"><i class="fas fa-info-circle"></i><span>About</span></a>
            <!-- <a href="#"><i class="fas fa-cogs"></i><span>Components</span></a> -->
            <a href="index1.html"><i class="fas fa-table"></i><span>Time Table</span></a>
            <a href="form.php"><i class="fas fa-th"></i><span>Form</span></a>
            <a href="quiz.html"><i class="fas fa-sliders-h"></i><span>Quiz scheduler</span></a>

            <!-- <a><i class="fas fa-sliders-h"></i><span>Settings</span></a> -->
        </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
        <div class="profile_info">
            <img src="logo.jpg" class="profile_image" alt="">
            <h4></h4>
        </div>
        <a href="index.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
        <a href="index.php"><i class="fas fa-info-circle"></i><span>About</span></a>
        <!-- <a ><i class="fas fa-cogs"></i><span>Components</span></a> -->
        <a href="index1.html"><i class="fas fa-table"></i><span>Time Table</span></a>
        <a href="form.php"><i class="fas fa-th"></i><span>Form</span></a>
        <a href="quiz.html"><i class="fas fa-sliders-h"></i><span>Quiz scheduler</span></a>
        <!-- <a ><i class="fas fa-sliders-h"></i><span>Settings</span></a> -->
    </div>
    <!--sidebar end-->

    <div class="content">
        <div class="container">
            <h1>Welcome to GURU SHISHYA</h1>
                <p>Enter your details and submit the form</p>
                <?php
                    if($insert == true)
                    {
                        echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
                    }
                ?>
                <!-- <p>Thanks for submitting the form. we will be in touch as soon as possible!!!</p> -->
                <form action="form.php" method="post">
                    <input type="text" name="fname" id="fname" placeholder="Enter your First Name">
                    <input type="text" name="lname" id="lname" placeholder="Enter your last Name">
                    <input type="text" name="age" id="age" placeholder="Enter your Age">
                    <input type="text" name="dob" id="dob" placeholder="Enter your Date Of Birth">
                    <input type="text" name="gender" id="gender" placeholder="Enter your gender">
                    <input type="email" name="email" id="email" placeholder="Enter your email">
                    <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
                    <input type="text"  name="course" id="course" placeholder="Enter your course">
                    <textarea name="address" id="address" cols="30" rows="5"
                        placeholder="Enter your address"></textarea>
                    <textarea name="description" id="description" cols="30" rows="10"
                        placeholder="Enter your query"></textarea>
                    <button class="btn">Submit</button>
                </form>
        </div>
        <script src="index.js"></script>
    </div>


    <script type="text/javascript">
        $(document).ready(function () {
            $('.nav_btn').click(function () {
                $('.mobile_nav_items').toggleClass('active');
            });
        });
    </script>
</body>

</html>