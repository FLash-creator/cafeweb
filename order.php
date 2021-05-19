     <!DOCTYPE html>
     <html>
     <head>
     	<title></title>
     	 <link rel="stylesheet" type="text/css" href="css/order.css">

     </head>
     <body >
        <div class="loginbox">
        	<img src="image/vv1.jpg" class="vv1">
        	<h1>Enter Your Order</h1>
        	<form action="orderinfo.php" method="post">
        		<p>Name</p>
        		<input type="text" name="name" placeholder="Enter your name plzz">
        		Select Your Orders<br>
        		<select name="select" >
        			<option value="CAPPUCCINO">CAPPUCCINO</option>
        			<option value="MASALA TEA">MASALA TEA</option>
        			<option value="CHAI">CHAI</option>
        			<option value="ICED COFFEE">ICED COFFEE</option>
        			<option value="CAKE">CAKE</option>
        			<option value="COOKIES">COOKIES</option>
        		</select><br>
        		<p>Quantity</p>
        		<input type="text" name="quantity" placeholder="Enter Quantity">
        		<p>Table No.</p>
        		<input type="text" name="tab" placeholder="Table number cannot beyond be 10">
        		<input type="submit" name="submit" value="Order">


        	</form>
        	
        </div>

     
     </body>
     </html>