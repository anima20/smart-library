
<html>

<head>

<style>



.header-two.scroll-to-fixed-fixed {
    background: #fff;
    padding: .3em 0 0.8em;
	-webkit-box-shadow: 0px 0px 5px 1px #d2d2d2;
	-moz-box-shadow: 0px 0px 5px 1px #d2d2d2;
	-o-box-shadow: 0px 0px 5px 1px #d2d2d2;
	-ms-box-shadow: 0px 0px 5px 1px #d2d2d2;
    box-shadow: 0px 0px 5px 1px #d2d2d2;
    z-index: 999;
}
.header-two.scroll-to-fixed-fixed .header-logo h1 {
    font-size: 2.5em;
}
.header-two.scroll-to-fixed-fixed .header-search {
    margin-top: 1.8em;
    margin-bottom: 1em;
}
.header-two.scroll-to-fixed-fixed .header-search input[type="search"] { 
    padding: 0.8em 5em 0.8em 1em; 
}
.header-two.scroll-to-fixed-fixed .header-search .btn-default { 
    height: 44px; 
}
.header-two.scroll-to-fixed-fixed .header-cart { 
    margin: 1.1em 0 0;
}
.header-two {
    padding: 2em 0; 
	position: relative;
}
.header-logo {
    float: left; 
    margin-top:-3%;
}
.header-search {
    float: left;
    width: 55%;
    text-align: center;
    margin: 1.6em 5em;
}
.header-cart {
    float: right;
	margin-top:-9%;
}  
.header-logo h1,.footer-logo.header-logo h2{
    font-size: 3em; 
    font-weight: 900;
}
.header-logo h1 a ,.footer-logo.header-logo h2 a{
    display: inline-block;
    color: #000;
    text-decoration: none;
    position: relative;
}
.header-logo h1 a span,.footer-logo.header-logo h2 a span{
    font-family: 'Lovers Quarrel', cursive;
    font-size: 2em;
    color:#F44336;
    vertical-align: sub;
	margin-right: 3px;
}
.header-logo h1 a i,.footer-logo.header-logo h2 a i{
    display: block;
    position: absolute;
    bottom: 10%;
    right: 2%;
    font-size: 0.5em; 
} 
.header-logo h6 {
    font-size: 0.8em;
    color: #000;
    letter-spacing: 1px;
    margin-top: -1em;
}  
.header-search form {
    position: relative;
}
.header-search input[type="search"] {
    width: 100%;
    padding: 1em 5em 1em 1em;
    font-size: 1em;
    color: #999;
    outline: none;
    border: 1px solid #cccccc;
    background: none;
    -webkit-appearance: none;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
}
.header-search input[type="search"]:focus {
    border-color: #f44336;
}
.header-search .btn-default {
    border: none;
    position: absolute;
    top: 0px;
    right: 0px;
    width: 60px;
    height: 57px;
    outline: none;
    box-shadow: none;
    background: #f44336;
    padding: 0;
    border-radius: inherit;
    -webkit-appearance: none;
    -webkit-transition: .5s all;
    -moz-transition: .5s all;
    transition: .5s all;
}
.header-search i.fa {
    font-size: 1em;
    color: #fff;
    padding: 3px;
} 
.header-cart h4 a {
    color: #000;
}
/*-- cart-box --*/ 
.cart {
    margin-right: -2em;
    padding-right: 1em;
    border-right: 1px solid #6495ed;
    float: left;
} 
.w3view-cart {
    background: #0280e1;
    border: none;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	-o-border-radius: 50%;
	-ms-border-radius: 50%;
    border-radius: 50%;
    width: 60px;
    height: 59px;
    text-align: center;
    outline: none;
}
.w3view-cart  i.fa {
    font-size: 2em;
    color: #ffffff;
	vertical-align: middle;
}

.exp img {
    width:50px;
    height:50px;
}

</style>
<link href="font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/875301f134.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>

<div class="header-two"><!-- header-two -->
			<div class="container">
				<div class="header-logo">
					<h1><a href="index.php"><span>S</span>mart <i>Library</i></a></h1>
					<h6>Your Library. Your place.</h6> 
				</div>	
				<div class="header-search">
					<form action="search.php" method="post">
						<input type="search" name="Product" placeholder="Search for a Product..." required="">
						<button type="submit" class="btn btn-default" aria-label="Left Align" name="search">
							<i class="fa fa-search" aria-hidden="true"> </i>
						</button>
					</form>
				</div>
                        <div class="mn">
                            <div class="header-cart"> 
                                <a href="demo.php"><button class="w3view-cart"><i class="fa fa-qrcode" aria-hidden="true" ></i>
        
                                </button></a>						 
                            
                                <div class="cart"> 
                                        <button class="w3view-cart" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i>

                                        <span class="badge"> </span></button>
                                        
                                </div>
                            
                            </div> 
                        </div>    
				         
			</div>		
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="text-align:center;">Cart List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body exp">


            <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Product</th>
                            <!-- <th scope="col">Image</th> -->
                            <!-- <th scope="col">Item</th> -->
                            <th scope="col">Item-name</th>
                            <th scope="col">quantity</th>
                            <th scope="col">Price</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                                if(isset($_SESSION['cart'])){
                                    
                                    $usr = $_SESSION['username'];
                                                                    
                                    $con = mysqli_connect('localhost','root','','tblproject');
                                    
                                    $query = "select * from cart where user_name='$usr' ";
                                    $qr = mysqli_query($con,$query);
                                    while($row=mysqli_fetch_array($qr)){
                                        
                                        $ttl = $row['item_name'];
                                        $rs = $row['item_name'];
                                        $ds =$row['quantity'];
                                        $ima=$row['price'];
                                        $ims = $row['images'];
                                    

                                        echo "
                                        <tr>
                                            <td><img src='$ims'></td>
                                            <td>$ttl</td>
                                            <td>$ds</td>
                                            <td>$ima</td>
                                            
                                            
                                            


                                        </tr>

                                        ";
                                    }
                                }


                            ?>

                        
                        
                        
                        </tbody>
                    </table>


        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Proceed To Checkout</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>