<?php
@include 'connect.php';
$cargoID = $_GET['edit'];

if(isset($_POST['update_cargo'])){
    $shipID = $_POST['shipID'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $weight = $_POST['weight'];
    $containerType = $_POST['containerType'];


    if (empty($shipID) || empty($description) || empty($quantity) || empty($weight) || empty($containerType)) {
        $message[] = 'Please fill out all fields.';
    } else {
        $check_ship = mysqli_query($conn, "SELECT * FROM cargo WHERE cargoID = '$cargoID'");
        
        if (mysqli_num_rows($check_ship) > 0) {
            $update = "UPDATE cargo SET description='$description', quantity='$quantity', weight='$weight', containerType='$containerType', shipID='$shipID' WHERE cargoID = $cargoID";
            
            $upload = mysqli_query($conn, $update);

            if ($upload){
                $message[] = 'cargo updated successfully.';
            } else {
                $message[] = 'Could not update this cargo.';
            }
        } else {
            $message[] = 'Invalid ship ID.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cargo update</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
    <!-- css link  -->
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="admin-crew centered">
<div class="container ">
    <?php
    $select = mysqli_query($conn, "SELECT * FROM cargo WHERE cargoID = $cargoID");
    while($row = mysqli_fetch_assoc($select)){
        ?>

            <div class="title">update cargo </div>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <?php
               if(isset($message)){
               foreach($message as $message){
               echo '<span class="error-msg">' .$message. '</span>';
              }
             }
            ?>
            <div class="user-details">
                        <div class="input-box">
                            <span class="details"> cargo description</span>
                            <input type="text" placeholder="Enter the cargo description" id="description" value="<?php echo $row['description'];?>" name="description" required>
                        </div>
                        <div class="input-box">
                            <span class="details"> cargo quantity</span>
                            <input type="text" placeholder="Enter cargo quantity" id="quantity" value="<?php echo $row['quantity'];?>" name="quantity" required>
                        </div>
                        <div class="input-box">
                            <span class="details">cargo weight</span>
                            <input type="text" placeholder="Enter cargo weight" id="weight" value="<?php echo $row['weight'];?>" name="weight" required>
                        </div>
                        <div class="input-box">
                            <span class="details">  </span>
                            <input type="text" placeholder="Enter container type " id="containerType" value="<?php echo $row['containerType'];?>" name="containerType" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Ship ID</span>
                            <input type="text" id="shipID" value="<?php echo $row['shipID'];?>" name="shipID" required>
                        </div>
            </div>
            <div class="button">
                        <input type="submit" class="btn" name="update_cargo" value="update cargo">
                        <a href="crew_admin.php">go back</a>
            </div>
            </form>
    <?php };?>

        </div>
</div>

</body>
</html>