<?php

session_start();

$usr = $_SESSION['usr'];

$bar = $_POST['bar'];

$m = new MongoDB\Driver\Manager("mongodb://localhost:27017");



$query = new MongoDB\Driver\Query(['_id' => $bar]);

$rows = $m->executeQuery("project.book",$query);

foreach($rows as $row){
    $ttl= $row->name;
    $ds = $row->desc;
    $rs = $row->author;
    $ima = $row->dept;
}



?>


<html>

<head>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <script type="text/javascript" src="sweetalert.min.js"></script>
          <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<style>
h1 {
	margin: 1em 0 0.5em 0;
    width:70%;
    margin-left:12%;
	font-weight: 600;
	font-family: 'Titillium Web', sans-serif;
	position: relative;  
	font-size: 36px;
	line-height: 40px;
	padding: 15px 15px 15px 15%;
	color: #355681;
	box-shadow: 
		inset 0 0 0 1px rgba(53,86,129, 0.4), 
		inset 0 0 5px rgba(53,86,129, 0.5),
		inset -285px 0 35px white;
	border-radius: 0 10px 0 10px;
}
.container{
    width:30%;
    margin-top:5%;
    margin-left:35%;
    text-align:center;
    
	font-family: 'Titillium Web', sans-serif;
    font-size: 20px;
}

.num , .currency {
    color:#ffc107;
    font-size: 1.75rem;
}

h2 {
    font-size: 1.75rem;
    font-family: inherit;
    font-weight: 500;
    line-height: 1.2;
    color: inherit
}
dt {
    display: block;
    color: inherit
}
dl {
    display: block;
   
    margin-top: 0;
    margin-bottom: 1rem;
}

#minu{
    height:100%;
}
#maxi{
    height:100%;
}
input{
    width:40%;
}

p{
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}
img{
    float:left;
    margin-left:5%;
}
</style>
</head>

<body>

<h1>Enter Quantity of this scan product</h1>
    <form action="managecart.php" method="POST">
        <!-- <img src="images/e1.png"> -->

        <div class="container">
            <h2><b>Name: </b><?php echo $ttl;  ?></h2>


                <div>
                    

                    <p class="price-detail-wrap"> 
                        <!-- <span class="price h3 text-warning"> 
                            <span class="currency">&#8377;</span><span class="num"><?php echo "2100";?></span>
                        </span>  -->
                        <span><b>Author: </b><?php echo $rs;?></span> 
                    </p> 
                </div>

                <dl class="item-property">
                    <dt>Description</dt>
                    <dd><p style="width:175%;"><?php echo $ds; ?></p></dd>
                </dl>

                <dl class="param param-feature">
                    <dt>MFG Name#</dt>
                    <dd><p>Ankit Kumar</p></dd>
                </dl>

                <div class="input-group">
                    <span class="input-group-btn">
                                                <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="" id="minu">
                                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                                </button>
                                                </span>
                                                <input type="text" id="quantity" name="quantity" class="form-control input-number"  value="1" min="1" max="100">
                                                <span class="input-group-btn">
                                                    <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="" id="maxi">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                    </span>
                </div><br>
                <div class="text-center float-left" style="padding-bottom: 5em;">
                        <button class="btn btn-primary btn-lg btn-pills" type="submit" id="crt" name="Add_To_Cart">Issue Book <i class="fa fa-shopping-cart text-red"></i></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        
                        
                </div>
                <!-- $ttl = $row['ProductName'];
    $rs = $row['ProductPrice'];
    $ds =$row['Description'];
    $ima -->
                <input type="hidden" name="Item_name" value="<?php echo $ttl;  ?>">
                <input type="hidden" name="Price" value="<?php echo $rs;  ?>">
                <input type="hidden" name="image" value="<?php echo $ima;  ?>">
        </div>
    </form>   
    <form action="renew.php" method="POST"> 
        <input type="hidden" name="Item_name" value="<?php echo $ttl;  ?>">
        <!-- <input type="hidden" name="Price" value="<?php echo $rs;  ?>">
        <input type="hidden" name="image" value="<?php echo $ima;  ?>"> -->
        <button style="margin-top:-1%;" class="btn btn-primary btn-lg btn-pills" type="submit" id="crt" name="Add_To_Cart">Renew <i class="fa fa-shopping-cart text-red"></i></button>
    </form>                  

    <form action="return.php" method="POST"> 
        <input type="hidden" name="Item_name" value="<?php echo $ttl;  ?>">
        <!-- <input type="hidden" name="Price" value="<?php echo $rs;  ?>">
        <input type="hidden" name="image" value="<?php echo $ima;  ?>"> -->
        <button style="float:left; margin-right:10%;" class="btn btn-primary btn-lg btn-pills" type="submit" id="crt" name="Add_To_Cart">Return <i class="fa fa-shopping-cart text-red"></i></button>
    </form> 
<script type="text/javascript">
var quantitiy=0;
     $(document).ready(function(){
   $('.quantity-right-plus').click(function(e){
        
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
            
            $('#quantity').val(quantity + 1);

          
            // Increment
        
    });

     $('.quantity-left-minus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity = parseInt($('#quantity').val());
        
        // If is not undefined
      
            // Increment
            if(quantity>1){
            $('#quantity').val(quantity - 1);
            }
    });
    
});

    $("#crt").click(function() {
        swal({
            title: "Item Added",
            text: "You clicked the button!",
            icon: "success",
            button: "Item Added",
        });
    });
</script>
</body>


</html>