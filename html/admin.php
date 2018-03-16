<?php
Session_start();
include 'dbh.php';

$admin = $_SESSION['admin'];
$id = $_SESSION['id'];


if(!isset($_SESSION['id'])) {
    header('Location: index.html');
    exit();
}

if($admin != 1){
    header('Location: pictures.php');
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="index.css">

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Impression</title>

    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
    <link href="css/modern-business.css" rel="stylesheet">

    
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<style>
form {
margin: 0 auto; 
width:250px;
}

</style>
<body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                   
                    <div class="navbar-header">
                    <a href="index.html"><img src="./img/imp-logo.jpg" alt="1"></a>
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                    </div>
                   
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                          
                            <li>
                                <a href="shop.html">Market</a>
                            <li>
                                <a href="Login.html">Login / Sign up</a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
               
            </nav>
        
        <br><br>
        <form action= "add.php" method="POST">
        <img src="./img/imp-logo.jpg" alt="1" align="middle">
        	<p><strong>Product</strong></p>
        	<p><strong>Add</strong></p>
        	<input type="text" name="prod_name" placeholder="ProductName"><br>
		    <input type="text" name="prod_price" placeholder="Price($)"><br>
		    <input type="text" name="prod_details" placeholder="Detail"><br>
		    <button type="submit">Add</button><br>
        </form>

        <br>

        <form action= "delete.php" method="POST">
        	<p><strong>Remove</strong></p>
        	<input type="text" name="prodID" placeholder="ProductID"><br>
		    <button type="submit">remove</button><br>
        </form>

        <br>  

         <form action= "modify.php" method="POST">
            <p><strong>Modify</strong></p>
            <p>Current Product:</p>
            <input type="text" name="prodID" placeholder="ProductID"><br> <br> 
            <p><strong>New</strong> Product input:</p>
            
             <input type="text" name="prod_name" placeholder="ProductName"><br>
             <input type="text" name="prod_price" placeholder="Price"><br>
             <input type="text" name="prod_details" placeholder="Details"><br>
            <button type="submit">Modify</button><br>
        </form>
         <br>  
       
       <p align="middle"><strong>List of Products:</strong></p>

    <table width="600" border="1" cellpadding="1" cellspacing="1" align="center">
		<tr>
			<th>Product ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>Details</th>
		</tr>


	<?php
	$sql = "SELECT * FROM Product;";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);

	if($resultCheck > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr>";

			echo "<td>" . $row['prod_id'] . "</td>";
			echo "<td>" . $row['prod_name'] . "</td>";
			echo "<td>" . $row['prod_price'] . "</td>";
			echo "<td>" . $row['prod_details'] . "</td>";

			echo "<tr>";
		}
	}
	?>
	</table>



 <script src="js/jquery.js"></script>

 
 <script src="js/bootstrap.min.js"></script>

</body>
<script src="./login.js"></script>
</html>