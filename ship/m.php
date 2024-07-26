<!-- crew -->
<?php
require 'connect.php';
$sql = "SELECT * FROM crew";
$crew = $conn->query($sql);
?>

<!-- booking -->
<?php
@include 'connect.php';

if(isset($_POST['send'])){
    $companyName = $_POST['companyName'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $destinationPort = $_POST['destinationPort'];
    $cargoDescription = $_POST['cargoDescription'];
    $cargoWeight = $_POST['cargoWeight'];
    $cargoSpace = $_POST['cargoSpace'];
    $paymentMethod = $_POST['paymentMethod'];
    $shippingDate = $_POST['shippingDate'];

    $request = "INSERT INTO book_form(companyName, email, number, address, destinationPort, cargoDescription, cargoWeight,cargoSpace, paymentMethod, shippingDate) VALUES('$companyName','$email','$number','$address','$destinationPort','$cargoDescription','$cargoWeight', '$cargoSpace', $paymentMethod, '$shippingDate')";
    mysqli_query($conn, $request);
    header('location:m.php');
}else{
    echo 'somthing went worng try again';
}

?>

<?php
@include 'connect.php';

if(isset($_POST['message'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $request = "INSERT INTO message(name, email, number, message)VALUES ('$name','$email','$number','$message')";

    if(mysqli_query($conn, $request)){
        header('location:m.php');
    }else{
        echo 'something went wrong, try again';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ship port</title>

<!-- Font Awesome 6 CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="m.css">
    </head>
    <body>
        <div class="header">
            <nav>
                <img src="images/logo1.png" class="logo">
                <ul class="nav-links">
                    <li><a href="#home">home</a></li>
                    <li><a href="#about">about</a></li>
                    <li><a href="#services">services</a></li>
                    <li><a href="#crew">crew</a></li>
                    <li><a href="#review">review</a></li>
                    <li><a href="#contact">contact</a></li>
                    <li><a href="#book">contact</a></li>

                </ul>
            </nav>
            <div class="home-content">
                <h1>welcome<br><span>OCEAN HAVEN</span> port</h1>
                <p class="par">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                     Ratione dolore dicta saepe! Deleniti,
                     <br> tenetur laudantium vitae magnam dolore explicabo.
                      Explicabo libero fugiat eos accusamus doloribus.
                </p>
                <button class="cn"><a href="login_form.php">Join Now</a></button>

            </div>
        </div>
     
      <section class="about" id="about">
        <div class="heading">
            <h1>About Us</h1>
        </div>
  
        <div class="row">
            <div class="video-container">
                <video src="images/port.mp4" loop autoplay muted></video>
                <h3> best ship port</h3>

            </div>
            <div class="content">
            <h3> why choose us?</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, odio voluptatem voluptas sapiente
                     unde ipsum accusamus animi rem quae odit laborum vitae sunt rerum quas necessitatibus placeat
                      facere dolorem iure?
                </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum libero saepe quidem necessitatibus
                     sapiente pariatur illum quam excepturi voluptate in! Ab veritatis commodi dolore sit nihil voluptates, 
                     Lorem ipsum dolor sit amet earum modi.
                </p>
                <button class="cn"><a href="#">learn more</a></button>
                    
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <div class="container">
            <div class="row">
                <div>
                    <h2 class="title">exclusive <span>services</span></h2>
                </div>
                    <p class="description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium distinctio
                         temporibus reprehenderit nam atque exercitationem architecto blanditiis suscipit dolorem.
                         saepe temporibus minima deleniti ipsam!
                    </p>
           </div>
           <div class="row">
            <div class="service-column">
                <div class="single-service">
                    <div class="content">
                        <span class="icon">
                            <i class="fa-solid fa-ship"></i>
                        </span>
                        <h3 class="main-title">ships arrivels</h3>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Veritatis, repudiandae at omnis sed illo doloremque et incidunt aut. Vero, maiores?
                        </p>
                        <a href="#" class="learn-more">Read More</a>
                    </div>
                    <span class="circle-before"></span>
                </div>
            </div>
            <div class="service-column">
                <div class="single-service">
                    <div class="content">
                        <span class="icon">
                            <i class="fa-solid fa-ship"></i>
                        </span>
                        <h3 class="main-title">ships arrivels</h3>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Veritatis, repudiandae at omnis sed illo doloremque et incidunt aut. Vero, maiores?
                        </p>
                        <a href="#" class="learn-more">Read More</a>
                    </div>
                    <span class="circle-before"></span>
                </div>
            </div>
            <div class="service-column">
                <div class="single-service">
                    <div class="content">
                        <span class="icon">
                            <i class="fa-solid fa-ship"></i>
                        </span>
                        <h3 class="main-title">ships arrivels</h3>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Veritatis, repudiandae at omnis sed illo doloremque et incidunt aut. Vero, maiores?
                        </p>
                        <a href="#" class="learn-more">Read More</a>
                    </div>
                    <span class="circle-before"></span>
                </div>
            </div>
            <div class="service-column">
                <div class="single-service">
                    <div class="content">
                        <span class="icon">
                            <i class="fa-solid fa-ship"></i>
                        </span>
                        <h3 class="main-title">ships arrivels</h3>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Veritatis, repudiandae at omnis sed illo doloremque et incidunt aut. Vero, maiores?
                        </p>
                        <a href="#" class="learn-more">Read More</a>
                    </div>
                    <span class="circle-before"></span>
                </div>
            </div>
            <div class="service-column">
                <div class="single-service">
                    <div class="content">
                        <span class="icon">
                            <i class="fa-solid fa-ship"></i>
                        </span>
                        <h3 class="main-title">ships arrivels</h3>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Veritatis, repudiandae at omnis sed illo doloremque et incidunt aut. Vero, maiores?
                        </p>
                        <a href="#" class="learn-more">Read More</a>
                    </div>
                    <span class="circle-before"></span>
                </div>
            </div>
            <div class="service-column">
                <div class="single-service">
                    <div class="content">
                        <span class="icon">
                            <i class="fa-solid fa-ship"></i>
                        </span>
                        <h3 class="main-title">ships arrivels</h3>
                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                             Veritatis, repudiandae at omnis sed illo doloremque et incidunt aut. Vero, maiores?
                        </p>
                        <a href="#" class="learn-more">Read More</a>
                    </div>
                    <span class="circle-before"></span>
                </div>
            </div>
        </div>
     </section>
     <section class="team" id="crew">
        <div class="container">
            <h1>our<span> team</span></h1>
            <?php 
            while($row = mysqli_fetch_assoc($crew)){
            ?>
            <div class="team-container">
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

     <section class="review" id="review">
        <h1 class="heading">customer's <span>review</span> </h1>
        <div class="box-container">
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam nam,
                     tenetur aspernatur alias, tempora veritatis expedita, accusamus reiciendis
                      sunt dignissimos aperiam vel delectus iure? Sequi veniam tenetur nemo nobis sapiente.</p>
                      <div class="user">
                        <img src="images/crew1bg.png" alt="">
                        <div class="user-info">
                            <h3>zain malik</h3>
                            <span>happy customer</span>
                        </div>
                      </div>
                      <span class="fas fa-quote-right"></span>
            </div>
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam nam,
                     tenetur aspernatur alias, tempora veritatis expedita, accusamus reiciendis
                      sunt dignissimos aperiam vel delectus iure? Sequi veniam tenetur nemo nobis sapiente.</p>
                      <div class="user">
                        <img src="images/crew3bg.png" alt="">
                        <div class="user-info">
                            <h3>selina gomes</h3>
                            <span>happy customer</span>
                        </div>
                      </div>
                      <span class="fas fa-quote-right"></span>
            </div>
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam nam,
                     tenetur aspernatur alias, tempora veritatis expedita, accusamus reiciendis
                      sunt dignissimos aperiam vel delectus iure? Sequi veniam tenetur nemo nobis sapiente.</p>
                      <div class="user">
                        <img src="images/crew3.jpg" alt="">
                        <div class="user-info">
                            <h3>zak efron</h3>
                            <span>happy customer</span>
                        </div>
                      </div>
                      <span class="fas fa-quote-right"></span>
            </div>
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam nam,
                     tenetur aspernatur alias, tempora veritatis expedita, accusamus reiciendis
                      sunt dignissimos aperiam vel delectus iure? Sequi veniam tenetur nemo nobis sapiente.</p>
                      <div class="user">
                        <img src="kylie-removebg-preview.png" alt="">
                        <div class="user-info">
                            <h3>kylie jenner</h3>
                            <span>happy customer</span>
                        </div>
                      </div>
                      <span class="fas fa-quote-right"></span>
            </div>
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam nam,
                     tenetur aspernatur alias, tempora veritatis expedita, accusamus reiciendis
                      sunt dignissimos aperiam vel delectus iure? Sequi veniam tenetur nemo nobis sapiente.</p>
                      <div class="user">
                        <img src="zain-removebg-preview.png" alt="">
                        <div class="user-info">
                            <h3>zain malik</h3>
                            <span>happy customer</span>
                        </div>
                      </div>
                      <span class="fas fa-quote-right"></span>
            </div>
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam nam,
                     tenetur aspernatur alias, tempora veritatis expedita, accusamus reiciendis
                      sunt dignissimos aperiam vel delectus iure? Sequi veniam tenetur nemo nobis sapiente.</p>
                      <div class="user">
                        <img src="selina-removebg-preview.png" alt="">
                        <div class="user-info">
                            <h3>selina gomes</h3>
                            <span>happy customer</span>
                        </div>
                      </div>
                      <span class="fas fa-quote-right"></span>
            </div>
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam nam,
                     tenetur aspernatur alias, tempora veritatis expedita, accusamus reiciendis
                      sunt dignissimos aperiam vel delectus iure? Sequi veniam tenetur nemo nobis sapiente.</p>
                      <div class="user">
                        <img src="zak-removebg-preview.png" alt="">
                        <div class="user-info">
                            <h3>zak efron</h3>
                            <span>happy customer</span>
                        </div>
                      </div>
                      <span class="fas fa-quote-right"></span>
            </div>
            <div class="box">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam nam,
                     tenetur aspernatur alias, tempora veritatis expedita, accusamus reiciendis
                      sunt dignissimos aperiam vel delectus iure? Sequi veniam tenetur nemo nobis sapiente.</p>
                      <div class="user">
                        <img src="kylie-removebg-preview.png" alt="">
                        <div class="user-info">
                            <h3>ahmed jenner</h3>
                            <span>happy customer</span>
                        </div>
                      </div>
                      <span class="fas fa-quote-right"></span>
            </div>
       </div>
     </section>
     <section class="contact" id="contact">
        <h1 class="heading"><span>contact </span>us</h1>
        <div class="row">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <input type="text" placeholder="name" class="box" name="name">
                <input type="email" placeholder="email" class="box" name="email">
                <input type="number" placeholder="number" class="box" name="number">
                <textarea name="message" class="box" placeholder="message" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="send message" class="btn">
            </form>
                <div class="image">
                   <img src="images/man.png" alt="">
                </div>
        </div>
    </section>
    </section> 
    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">company Name / sender</span>
                    <input type="text" placeholder="Enter company name / sender" id="companyName" name="companyName" required>
                </div>
                <div class="input-box">
                    <span class="details">email</span>
                    <input type="email" placeholder="Enter your email" id="email" name="email" required>
                </div>
                <div class="input-box">
                    <span class="details">phone number</span>
                    <input type="number" placeholder="Enter your number" id="number" name="number" required>
                </div>
                <div class="input-box">
                    <span class="details">address</span>
                    <input type="text" placeholder="Enter your address" id="address" name="address" required>
                </div>
                <div class="input-box">
                    <span class="details">destination port</span>
                    <input type="text" placeholder="Enter destination port" id="destinationPort" name="destinationPort" required>
                </div>
                <div class="input-box">
                    <span class="details">cargo description</span>
                    <input type="text" placeholder="Enter cargo description" id="cargoDescription" name="cargoDescription" required>
                </div>
                <div class="input-box">
                    <span class="details">weight of cargo</span>
                    <input type="text" placeholder="Enter weight of cargo" id="cargoWeight" name="cargoWeight" required>
                </div>
                <div class="input-box">
                    <span class="details">cargo space</span>
                    <input type="text" placeholder="Enter cargo space" id="cargoSpace" name="cargoSpace" required>
                </div>
                
                <div class="input-box">
                    <span class="details">payment method</span>
                    <input type="text" placeholder="Enter prefer payment method" id="paymentMethod" name="paymentMethod" required>
                </div>
                
                <div class="input-box">
                    <span class="details">shipping date</span>
                    <input type="date" placeholder="Enter prefer shipping date" id="shippingDate" name="shippingDate" required>
                </div>
    </div>
    <div class="button">
                <input type="submit" class="cn" name="send" value="book my trip">
    </div>
        </form>
    </section>
    <footer>
        <div class="footer-container">
            <div class="social-icons">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-google-plus"></i></a>
                <a href=""><i class="fa-brands fa-youtube"></i></a>
            </div>
            <div class="footer-nav">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">about us</a></li>
                    <li><a href="">services</a></li>
                    <li><a href="">our crew</a></li>
                    <li><a href="">trips</a></li>
                    <li><a href="">review</a></li>
                    <li><a href="">contact us</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2023; designed by<span class="designer">Web Wizerd</span></p>
        </div>
    </footer>
  </body>
</html>