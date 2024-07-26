<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="dashboard">
    <div class="menu">
            <ul>
                <li class="profile">
                    <div class="img-box">
                        <img src="images/logo1.png" alt="profile">
                    </div>
                    <h2>Ocean haven admin</h2>
                </li>
                <li>
                    <a class="active" href="#">
                       <i class="fas fa-home"></i>
                       <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="crew_admin.php">
                       <i class="fa-solid fa-users"></i>
                       <p>Crew</p>
                    </a>
                </li>
                <li>
                    <a href="ships_admin.php">
                       <i class="fas fa-ship"></i>
                       <p>ships</p>
                    </a>
                </li>
                <li>
                    <a href="add_arrivals.php">
                       <i class="fa-solid fa-anchor"></i>
                       <p>Ship Arrivals</p>
                    </a>
                </li>
                <li>
                    <a href="cargo_admin.php">
                       <i class="fa-solid fa-dolly"></i>
                       <p>cargo </p>
                    </a>
                </li>
                <li class="log-out">
                    <a href="#">
                       <i class="fas fa-sign-out-alt"></i>
                       <p>Log out</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
     <div class="content">
        <div class="title-info">
            <p>Dashboard</p>
            <i class="fas fa-home"></i>
        </div>
        <div class="data-info">
            <div class="box">
                <i class="fas fa-user"></i>
                <div class="data">
                    <p>users</p>
                    <span>500</span>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-users"></i>
                <div class="data">
                    <p>crew</p>
                    <span>100</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-ship"></i>
                <div class="data">
                    <p>ships</p>
                    <span>50</span>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-anchor"></i>
                <div class="data">
                    <p>ship arrivals</p>
                    <span>90</span>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-bookmark"></i>
                <div class="data">
                    <p>Shipping book</p>
                    <span>40</span>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-dolly"></i>
                <div class="data">
                    <p>cargo</p>
                    <span>15000</span>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-shield"></i>
                <div class="data">
                    <p>safe delivery</p>
                    <span>3000</span>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-money-check-dollar"></i>
                <div class="data">
                    <p>payment</p>
                    <span>1000</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-dollar"></i>
                <div class="data">
                    <p>revenue</p>
                    <span>100000</span>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-envelope"></i>
                <div class="data">
                    <p>contact</p>
                    <span>us</span>
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-star"></i>
                <div class="data">
                    <p>exclusive</p>
                    <span>services</span>
                </div>
            </div>
        </div>
      </div> 
</body>
</html>
      