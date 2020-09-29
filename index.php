<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GURU SHISHYA</title>
  <link rel="stylesheet" href="style.css">
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
      <h3>GURU <span>SHISHYA</span></h3>
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
    <h2>
      <marquee direction="left" height="50" width="100%">......ENDUCATION IS THE KEY TO SUCCESS......</marquee>
    </h2>
    <center><h1>About</h1></center>
    <div class="card">
      <h2>The communication of teachers,is an 
        important factor required by students to become successful
         in their educational pursuit. 
        Communication motivates the students to enhance their abilities. 
        It also encourages the students to work hard.
        When communication is effective, both the student and the teacher benefit. 
        Communication makes learning easier, helps students achieve goals, increases 
        opportunities for expanded learning, strengthens the connection between 
        student and teacher, and creates an overall positive experience.</h2>   
    </div>
    <div class="card">
      <h2>In this page, we have time table for all students to attend the classes
        to learn skills and communicate with faculty.
        We have a form for students to get touch with faculty and if they have any 
        grievances regarding any aspect they can get touch.
        To test your skills, we have a quiz page to attempt and test your knowledge.</h2>
    </div>
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