<?php
$insert=false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$con = mysqli_connect('localhost', 'root','');
if(!$con){
   die("connection to this database failed due to ".
   mysqli_connect_error());
}
//echo "Success connecting to the db";

// get the post records
$price = $_POST['price'];
$name = $_POST['name'];
$details = $_POST['details'];
$image = $_POST['image'];
// database insert SQL code
$sql= "INSERT INTO `shop`.`shop` (`id`, `price`, `name`, `details`, `image`) VALUES (NULL, '$price', '$name', '$details', '$image')";
// insert in database 
if($con->query($sql) == true){
   $insert=true;
}
else{
   echo "ERROR : $sql <br> $con->error";
}

$con->close();
}
?>
<?php
$mysqli = new mysqli('localhost', 'root','','shop');
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql = " SELECT * FROM shop ORDER BY id DESC ";
$result = $mysqli->query($sql);
$mysqli->close();
?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CodeHim">
    
    <!-- Style CSS -->
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar" style="background-color: #e3f2fd; height:100px">
<h1>Big Basket</h1>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add item</button>  
</nav>
      
 <main>
     <!-- Start DEMO HTML (Use the following code into your project)-->
    <div class="container1"> 
   <h1>Simple Shopping Cart</h1>
   <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Cart">Cart()</button>
   <div id="alerts"></div>
<div class="d-flex" >
<?php
    // LOOP TILL END OF DATA
    while($rows=$result->fetch_assoc())
    {
?> 
        <div class="product card" style="width: 20rem; height: 32rem;">
        <img class="card-img-top" src="<?php echo $rows['image'];?>" alt="Card image cap">
          <h3 class="productname"><?php echo $rows['name'];?></h3>
          <p><?php echo $rows['details'];?></p>
          <p class="price"><?php echo $rows['price'];?></p>
          <button class="addtocart">Add To Cart</button>
          </div>
      <?php
     }
   ?>
  </div>
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Item info</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div id="Conat"class="container" >
      <form action="index.php" method="post">
        <input  type="text" name="name" id="name" placeholder="Enter item name">
        <input  type="text" name="price" id="price" placeholder="Enter item price">
        <input type="text" name="details" id="details" placeholder="Enter item details">
        <input type="text" name="image" id="image" placeholder="Enter item image url">
        <button>Submit</button>
   </form>  
   </div>
      </div>
      
    </div>
  </div>
</div>
        </div>
        <div class="modal fade" id="Cart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              <div class="cart-container">
                  <h2>Cart</h2>
                  <table>
                    <thead>
                      <tr>
                      <th><strong>Product</strong></th>
                      <th><strong>Price</strong></th>
                    </tr>
                    </thead>
                    <tbody id="carttable">
                    </tbody>
                  </table>
                  <hr>
                  <table id="carttotals">
                    <tr>
                      <td><strong>Items</strong></td>
                      <td><strong>Total</strong></td>
                    </tr>
                    <tr>
                      <td>x <span id="itemsquantity">0</span></td>
                     
                      <td>₹<span id="total">0</span></td>
                    </tr></table>
        
                    
                  <div class="cart-buttons">  
                    <button id="emptycart">Empty Cart</button>
                    <button id="checkout">Checkout</button>
                  </div>
                </div>
               
           </div>
              </div>
              
            </div>
          </div>
        </div>
</div>
<!-- partial -->

     <!-- END EDMO HTML (Happy Coding!)-->
 </main>

        <script  src="index.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>