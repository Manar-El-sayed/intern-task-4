<?php
require_once 'connect.php';
$sql = "SELECT * FROM crew";
$crew = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ship port</title>
        <!-- Bootstrap 5 CSS -->

<!-- Font Awesome 6 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="m.css">
    </head>
    <body>




    <section class="team" id="crew">
        <div class="container">
            <h1>our<span> team</span></h1>
            <?php 
            while($row = mysqli_fetch_assoc($crew)){
            ?>
            <div class="row">
                <div class="col-md-3 profile text-center">
                    <div class="img-box">
                        <img src="images/<?php echo $row['crewImg'];?>" class="image-responsive">
                        <ul>
                            <a href="#"><li><i class="fa-brands fa-facebook"></i></li></a>
                            <a href="#"><li><i class="fa-brands fa-twitter"></i></li></a>
                            <a href="#"><li><i class="fa-brands fa-linkedin"></i></li></a>
                        </ul>
                    </div>
                    <h2><?php echo $row['crewName'];?></h2>
                    <h3><?php echo $row['role'];?></h3>
                    <p><?php echo $row['nationality'];?></p>
                    <p><?php echo $row['joinDate'];?></p>
                    <p><?php echo $row['contactInfo'];?></p>
                </div>
            </div>
        </div>
        <?php }?>
     </section>
    </body>
</html>