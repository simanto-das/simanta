<!DOCTYPE html>
<html>
<head>
  <title>SPORTS-ECOMMERCE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div style="display:inline-center;">
    <?php include 'header.php' ?>
  </div>
  <div style="display:inline-block;">

    <nav>
      <a style="margin-left:10px; font-size:120%;" href="adminhome.php">Home</a>
      <a style="margin-left:10px; font-size:120%;" href="viewcatagories.php">Categories</a>
      <a style="margin-left:10px; font-size:120%;" href="shop.php">All Shops</a> 
      <a style="margin-left:10px; font-size:120%;" href="signupall.php">Campaign</a>
      <a style="margin-left:10px; font-size:120%;" href="signupall.php">All Products</a> 
      <a style="margin-left:10px; font-size:120%;" href="signupall.php">Brands</a> 
      <a style="margin-left:10px; font-size:120%;" href="login.php">Gift Cards</a>
      <a style="margin-left:10px; font-size:120%;" href="login.php">Customer Accounts</a>
      <a style="margin-left:10px; font-size:120%;" href="chat.php">Chat</a>
    </nav>
  </div>
  <div>
  </div>

 	<div>
         
    <div  style="max-width:1500px; background-color: lightgrey; margin-left:100px; margin-right:100px;">
    <h2 style="text-align: center; margin-top: 30px;">INDOOR SPORTS PRODUCTS</h2>
  
    <div>
    <p> <h2 style="margin-left: 80px"> UNO CARD </h2> </p>
    <pre><img src="indoor/uno.png" alt="UNO CARD GAME" style="width: 20%; margin-left: 80px;" />
    <p> <h2 style="text-align:left; margin-left: 80px"> UNO CARD GAME </h2> </p>
    <div style="margin-left: 60px;padding: 5px">
    
    <button type="button" onClick="document.location.href='viewdetails.php'">View Details</button> 
    </div>

    </div>

    <div>
    <p> <h2 style="margin-left: 80px"> DART BORD </h2> </p>
    <pre><img src="indoor/bord.png" alt="MAGNETIC DART BORD"  style="width: 20%; margin-left: 80px;">
    <p> <h2 style="text-align:left; margin-left: 70px"> MAGNETIC DART BORD </h2> </p>
    <div style="margin-left: 60px;padding: 5px">
    <button type="button" onClick="document.location.href='viewdetailsdart.php'">View Details</button> 
    </div>
      
    </div>
   


    <div>
    	<h3>COMMENT BOX </h3>
 
		<form>
			<label>Comment</label>
  			<input type="text" name="write something" placeholder="write something">
  			<button type="submit">Submit</button>
  			
		</form>


    </div>


     
       
            <div>
                <label style="margin-top:5px; font-size:120%;">Your Messsage</label>

                

                <textarea style="margin-top:5px; font-size:120%;" id="ta" name="ta" rows="5" cols="20"></textarea>

            </div>
            <div>
                
                <button type="reset">Reset</button>
            </div>         
    <div>
    <?php include 'footer.php' ?>
  </div>
</body>
</html>