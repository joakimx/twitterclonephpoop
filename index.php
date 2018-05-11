<?php
    include  'core/init.php';
?>
<html>
<head>
    <title>Tweeter</title>
    <meta charset=""UTF-8 />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css"/>
    <link rel="stylesheet" href="assets/css/style-complete.css"/>
</head>
<body>
<div class="front-img">
    <img src="assets/images/background.jpg" />

</div>
<!-- Main Wrapper -->
<div class="Wrapper">

    <!-- Header Wrapper -->
    <div class="header-wrapper">
        <div class="nav-container">

            <!-- Nav -->
            <div class="nav">
                <div class="nav-left">
                    <ul>
                        <li><i class="fa fa-twitter" aria-hidden="true">
                            </i>
                            <a href="#">Home</a>
                        </li>
                    </ul>
                </div> <!-- Nav Left ends -->

                <div class="nav-right">
                    <ul>
                        <li>
                            <a href="#">Language</a>
                        </li>
                    </ul>
                </div> <!-- Nav Right ends -->
            </div> <!-- Nav ends -->
        </div>
    </div> <!-- Header Wrapper end -->

    <!-- Inner Wrapper -->
    <div class="inner-wrapper">
        <div class="main-container">

            <!-- Content Left -->
            <div class="content-left">
                <h1>Welcome to Tweety.</h1>
                <br/>
                <p>A place to connect with your friends — and Get updates from the people you love, And get the updates from the world and things that interest you.</p>
            </div> <!-- Content Left ends -->

            <!-- Content Right -->
            <div class="content-right">

                <!-- Log In Section -->
                <div class="login-wrapper">
                    <?php include 'includes/login.php'; ?>

                </div> <!-- Log In Wrapper end -->

                <!-- Signup Section -->
                <div class="signup-wrapper">
                    <?php include 'includes/signup-form.php'; ?>
                </div> <!-- Signup Wrapper end -->

            </div> <!-- Content Right end -->
        </div> <!-- Main Container ends -->
    </div><!-- Inner Wrapper end -->


</div> <!-- Main Wrapper end -->

</div>
</body>
</html>
