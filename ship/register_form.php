<?php
session_start();
@include 'connet.php';

if(isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $user_type = $_POST['user_type'];

    if($password === $cpassword){
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $insert = "INSERT INTO `users` (`firstname`, `lastname`, `email`, `number`, `password`, `gender`, `user_type`) VALUES ('$firstname', '$lastname', '$email', '$number', '$hashed_password', '$gender', '$user_type')";

        if(mysqli_query($conn, $insert)){
            $_SESSION['success'] = "New user successfully created";
            header('location:login_form.php');
        }
    }
    else{
        $error = "Passwords do not match";
    }
}

if(isset($error)){
    $_SESSION['error'] = $error;
    header('location:register.php');
}
?>

<html>
    <head>
        <title>login page</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
      <section class="register">
            <div class="container">
                <div class="title">Registration</div>
                <form method="post" action="register.php">
                    <?php
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<span class="error-msg">'.$error.'</span>';
                        };
                    };
                    ?>
                    <div class="user-details">
                        <div class="input-box">
                            <label for="firstname" class="details">Fisrt Name</label>
                            <input type="text" placeholder="Enter your name" id="firstname" name="firstname" required>
                        </div>
                        <div class="input-box">
                            <label for="lastname" class="details">Last Name</label>
                            <input type="text" placeholder="Enter your username" id="lastname" name="lastname" required>
                        </div>
                        <div class="input-box">
                            <label for="email" class="details">Email</label>
                            <input type="email" placeholder="Enter your email" id="email" name="email" required>
                        </div>
                        <div class="input-box">
                            <label for="number" class="details">Phone Number</label>
                            <input type="number" placeholder="Enter your number" id="number" name="number" required>
                        </div>
                        <div class="input-box">
                            <label for="password" class="details">Password</label>
                            <input type="password" placeholder="Enter your password" id="password" name="password" required>
                        </div>
                        <div class="input-box">
                            <label for="cpassword" class="details">Confirm Password</label>
                            <input type="password" placeholder="Confirm your password" id="cpassword" name="cpassword" required>
                        </div>
                    </div>
                    <div class="gender-details">
                        <input type="radio" name="gender" id="dot-1" value="m">
                        <input type="radio" name="gender" id="dot-2" value="f">
                        <input type="radio" name="gender" id="dot-3" value="o">
                        <span class="gender-title">Gender</span>
                        <div class="category">
                            <label for="dot-1">
                                <span class="dot one"></span>
                                <span class="gender">male</span>
                            </label>
                            <label for="dot-2">
                                <span class="dot two"></span>
                                <span class="gender">female</span>
                            </label>
                            <label for="dot-3">
                                <span class="dot three"></span>
                                <span class="gender">other</span>
                            </label>
                        </div>
                    </div>
                    <div class="user-type">
                        <label for="user_type">Select User Type</label>
                        <select id="user_type" name="user_type">
                            <option value="client">Client</option>
                            <option value="agent">Agent</option>
                        </select>
                    </div>
                    <div class="submit-btn">
                        <input type="submit" value="submit" name="submit">
                    </div>
                </form>
            </div>
        </section>
    </body>
</html>