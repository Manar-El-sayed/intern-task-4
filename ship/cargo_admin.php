<?php
@include 'connect.php';

if (isset($_POST['add_cargo'])) {
    $shipID = $_POST['shipID'];
    $portID = $_POST['portID'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $weight = $_POST['weight'];
    $containerType = $_POST['containerType'];

    if (empty($description) || empty($quantity) || empty($weight) || empty($containerType)) {
        $message[] = 'Please fill out all fields.';
    } else {
            $check_ship = mysqli_query($conn, "SELECT * FROM ships WHERE shipID = '$shipID'");
            
            if (mysqli_num_rows($check_ship) > 0) {
            $insert = "INSERT INTO cargo(description, quantity, weight, containerType, shipID, portID) VALUES('$description','$quantity','$weight', '$containerType', '$shipID', '$portID')";
            $upload = mysqli_query($conn, $insert);

            if ($upload) {
                $message[] = 'New cargo added successfully.';
            } else {
                $message[] = 'Could not add this cargo .';
            }
        }
    }
}


if (isset($_GET['delete'])) {
    $cargoID = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM cargo WHERE cargoID = $cargoID");
    header('location: cargo_admin.php');
}
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin page</title>
     <!-- font awesome cdn link -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/all.min.css">
     <!-- css link  -->
     <link rel="stylesheet" href="login.css">
 </head>
 <body class="crew">
 <div class="admin-crew">
     <div class="form-container">
     <div class="container">
             <div class="title">Add cargo </div>
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
                             <span class="details">cargo description </span>
                             <input type="text" placeholder="Enter cargo description " id="description" name="description" required>
                         </div>
                         <div class="input-box">
                             <span class="details">cargo quantity </span>
                             <input type="text" placeholder="Enter cargo quantity" id="quantity" name="quantity" required>
                         </div>
                         <div class="input-box">
                             <span class="details">cargo weight</span>
                             <input type="text" placeholder="Enter cargo weight" id="weight" name="weight" required>
                         </div>
                         <div class="input-box">
                             <span class="details">container type</span>
                             <input type="text" placeholder="Enter container type" id="containerType" name="containerType" required>
                         </div>
                         <div class="input-box">
                             <span class="details">Ship ID</span>
                             <input type="text" id="shipID" name="shipID" required>
                         </div>
                         <div class="input-box">
                             <span class="details">port ID</span>
                             <input type="text" id="portID" name="portID" required>
                         </div>
             </div>
             <div class="button">
                         <input type="submit" name="add_cargo" value="Add cargo">
             </div>
             </form>
         </div>
     </div>
             <?php
            $select = mysqli_query($conn, "SELECT * FROM cargo");
             ?>
              <div class="crew-display">
                 <table class="crew-display-table">
                     <thead>
                         <tr>
                             <th>cargo description </th>
                             <th>cargo quantity </th>
                             <th>cargo weight </th>
                             <th>container type </th>
                             <th>ship ID</th>
                             <th>port ID </th>
                             <th>action</th>
                         </tr>
                     </thead>
                     <?php
                    while($row = mysqli_fetch_assoc($select)){
                        ?>
                        <tr>
                           <td><?php echo $row['description'];?></td>
                           <td><?php echo $row['quantity'];?></td>
                           <td><?php echo $row['weight'];?></td>
                           <td><?php echo $row['containerType'];?></td>
                           <td><?php echo $row['shipID'];?></td>
                           <td><?php echo $row['portID'];?></td>
                           <td>
                               <a href="cargo_update.php?edit=<?php echo $row['cargoID'];?>" class="btn"><i class="fas fa-edit"></i>edit</a>
                               <a href="cargo_admin.php?delete=<?php echo $row['cargoID'];?>" class="btn"><i class="fas fa-trash"></i>delete</a>
                           </td>
                       </tr>
                       <?php };?>
               </table>

              </div>
     </div>
    
 </body>
</html>