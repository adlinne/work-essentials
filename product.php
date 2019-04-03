<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<?php 
//session_start();
//$connect = mysqli_connect("localhost", "root", "", "work_essentials");
$connect = mysqli_connect("localhost", "root", "", "work_essentials");
if(isset($_POST["add_to_cart"]))
{
  if(isset($_SESSION["shopping_cart"]))
  {
    $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
    if(!in_array($_GET["id"], $item_array_id))
    {
      $count = count($_SESSION["shopping_cart"]);
      $item_array = array(
        'item_id'     =>  $_GET["id"],
        'item_name'     =>  $_POST["hidden_name"],
        'item_price'    =>  $_POST["hidden_price"],
        'item_quantity'   =>  $_POST["quantity"]
      );
      $_SESSION["shopping_cart"][$count] = $item_array;
    }
    else
    {
      echo '<script>alert("Item Already Added")</script>';
    }
  }
  else
  {
    $item_array = array(
      'item_id'     =>  $_GET["id"],
      'item_name'     =>  $_POST["hidden_name"],
      'item_price'    =>  $_POST["hidden_price"],
      'item_quantity'   =>  $_POST["quantity"]
    );
    $_SESSION["shopping_cart"][0] = $item_array;
  }
}

if(isset($_GET["action"]))
{
  if($_GET["action"] == "delete")
  {
    foreach($_SESSION["shopping_cart"] as $keys => $values)
    {
      if($values["item_id"] == $_GET["id"])
      {
        unset($_SESSION["shopping_cart"][$keys]);
        echo '<script>alert("Item Removed")</script>';
        echo '<script>window.location="product.php"</script>';
      }
    }
  }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<style>
  /*#border{
    border: solid;
  }*/
 .btn btn-danger{
 	color: red;
  margin-right: 10px;
}

.cards{
  float: left;
  
}
</style>
<script>
function transaction()
{
     location.href = "transaction.html";
} 
</script>
</head>

<body>

<div class="header">
	<!-- <h2>Home Page</h2> -->
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <div align="center">
    	<h2>Welcome <?php echo $_SESSION['username']; ?>!</h2> <br>
       <!-- <button type="button" class="btn btn-danger"> <a href="product.php?logout='1'" style="color: white;">Logout</a></button> -->
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-3">

           <!--  <button type="button" style="background-color: #FFC0CB;" class="btn btn-default">Products</button> -->
    
          </div>
          <div class="col-md-2">
      
          </div>
          <div class="col-md-3">
      <!-- <button type="button" style="background-color: #FFC0CB;" class="btn btn-default">Added-items</button> -->  
          </div>
          <div class="col-md-2">
      
          </div>
          

          <div class="col-md-2">
              <button type="button" style="background-color: #FFC0CB;" class="btn btn-default"> <a href="product.php?logout='1'" style="color: black;">Logout</a></button>
          </div>
        </div>
      </div> 
      
     
    <?php endif ?>

    <br />
    <div class="container">
      <br />
      
      <div class="row">
      <?php
        $query = "SELECT * FROM tbl_product ORDER BY id ASC";
        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_array($result))
          {
        ?>
        
      <div class="col-md-4 cards">

        <form method="post" action="product.php?action=add&id=<?php echo $row["id"]; ?>">
          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; margin-bottom: 25px;" align="center">
            <img src="imag/<?php echo $row["image"]; ?>" class="img-responsive" height=150 width=150 /><br />

            <h4 class="text-info"><?php echo $row["name"]; ?></h4>

            <h4 class="text-danger">Rs. <?php echo $row["price"]; ?></h4>

            <input type="text" name="quantity" value="1" class="form-control" />

            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

          </div>
        </form>
        
      </div>
   
      <?php
          }
        }
      ?>
    </div>

      <div style="clear:both"></div>
      <br />
      <h3>Order Details</h3>
      <div class="table-responsive">
        <table class="table table-bordered">
          <tr>
            <th width="40%">Item Name</th>
            <th width="10%">Quantity</th>
            <th width="20%">Price</th>
            <th width="15%">Total</th>
            <th width="5%">Action</th>
          </tr>
          <?php
          if(!empty($_SESSION["shopping_cart"]))
          {
            $total = 0;
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
          ?>
          <tr>
            <td><?php echo $values["item_name"]; ?></td>
            <td><?php echo $values["item_quantity"]; ?></td>
            <td>Rs. <?php echo $values["item_price"]; ?></td>
            <td>Rs. <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
            <td><a href="product.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
          </tr>
          <?php
              $total = $total + ($values["item_quantity"] * $values["item_price"]);
            }
          ?>
          <tr>
            <td colspan="3" align="right">Total</td>
            <td align="right">Rs. <?php echo number_format($total, 2); ?></td>
            <td></td>
          </tr>
          <?php
          }
          
          ?>

          
        </table>

        <!-- <?php
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
                $item_name=$values["item_name"];
                $item_quantity=$values["item_quantity"];
                $item_price=$values["item_price"];

                echo "$item_name\n";
                echo "\n";
                echo "$item_quantity"; 
                echo "\n";
                echo "$item_price";
                echo "\n";
                echo "$total";

                $sql="INSERT INTO orders (Product,Quantity,Price,Total) VALUES ('$item_name','$item_price',$item_price,$total)";
                if(!mysqli_query($connect,$sql))
                {
  
                      echo "not inserted";
                }
                else
                { 
                   echo " inserted";
                     

                }

            }

        ?> -->
        <div align="center">
        <button type="button" style="background-color: #FFC0CB;" class="btn btn-default" onclick="transaction()">Click to proceed</button>
      </div>
      </div>
    </div>
  </div>
  <br />
  </body>
</html>

    
