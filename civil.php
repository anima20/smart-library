<!DOCTYPE html>
<html>
<head>
<style>
	input[type="submit"]{
		margin-left: 5%;
		width: 30%;
		font-weight: bold;
	}
</style>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color: black;">
<div class="container py-5" style="background-image: url(images/regs6.jpg);">
	<div class="row mt-3 " style="margin-left: -25px">


<?php
   
   
$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");

$filter = ['dept' => 'Civil']; 
    
$query = new MongoDB\Driver\Query($filter);     
    
    $res = $mng->executeQuery("project.book", $query);
    
   			if (!empty($res)) {
					foreach ($res as $bk) 
					{
						?>
							<div class="col-md-3 mt-3">
								<form action="deo_cart.php?action=add&id=<?php echo $row["id"] ; ?>" method="post">
								<img src="images/civil/<?php echo $bk->pic; ?>" width="100%" height="200px" alt="Product Images">
								<div class="card" style="background-color: grey ; text-align: center; opacity: 0.8 ">
									<div class="card-body" style="width:100% ;  text-align: center; height:175px ; margin-top: -15px">
										<label class="card-title" style="font-weight: bold; font-size: 17px; margin-bottom: 	0px ; margin-left: -12px ;"><?php echo $bk->name; ?></label><br>
										<label class="card-text" style="margin-top: -3px; font-size: 15px;margin-bottom: 0%"><?php echo $bk->desc; ?></label><br>
										<label class="card-text" style="margin-top: -3%; font-size:15px; margin-bottom: 0%">Author: <?php echo $bk->author; ?></label>
										<label class="card-text" style="margin-top: -3%; font-size: 15px ; margin-bottom: 3%">Publication: <?php echo $bk->publication; ?></label><br>
										&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
										 <input type="submit" style="margin-left: -21%" name="submit" value="Renue">
										 <input type="submit" name="submit" value="Issue">
										 <input type="submit" name="submit" value="Return">
									</div>
								</div>
								</form>		
							</div>

						<?php

						
					}
				}
				else
				{
					echo "No product found";
				}

			?>
			
		

		 



	</div>
	
</div>

</body>
</html>



