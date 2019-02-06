<?php  include('config.php'); ?>
<!-- Source code for handling registration and login -->
<?php  include('includes/registration_login.php'); ?>

<?php include('includes/head_section.php'); ?>

<title>LifeBlog | Sign up </title>
</head>
<body>
    
    
    
    <?php
    
                $rand = rand(1,4);
                $image = "imagePath";

                    switch ($rand) {
                        case 1:
                            $image = "/static/images/captcha/1.jpg";
                            $value = "m43d2";
                            break;
                        case 2:
                            $image = "/static/images/captcha/2.jpg";
                            $value = "B4k4L";
                            break;
                        case 3:
                            $image = "/static/images/captcha/3.jpg";
                            $value = "Y34h8";
                            break;
                        case 4:
                            $image = "/static/images/captcha/4.jpg";
                            $value = "Dr4k0";
                            break;
                        default:
                            break;
            }
    $_SESSION["value"] = $value;
               ?>
<div class="container">
	<!-- Navbar -->
		<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
	<!-- // Navbar -->

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="register.php" >
			<h2>Register on LifeBlog</h2>
			<?php include(ROOT_PATH . '/includes/errors.php') ?>
			<input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username">
			<input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
			<input type="password" name="password_1" placeholder="Password">
			<input type="password" name="password_2" placeholder="Password confirmation">
                
                <?php   echo "<img src=.$image.>"; ?>
               
            <input type="text" name="answer" placeholder="Type in here">
			<button type="submit" class="btn" name="reg_user">Register</button>
			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>
		</form>
        
        
	</div>
</div>
<!-- // container -->
<!-- Footer -->
	<?php include( ROOT_PATH . '/includes/footer.php'); ?>
<!-- // Footer -->