

<!--
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
<title>Submission Form</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css">

     


</head>
-->

<body>
    <?php include("./header.php") ?>
    <div class="container" style="margin-top:20px">
    
		<form method="post" enctype="multipart/form-data" action="home.php">
		<div class="form-group" style="margin-left:70px" >

		<label for="item">Item Name: </label>
		<input type="text" class="form-control id="item" name="item" placeholder="Enter Item Name (required)">

		</div>

		<div class="form-group" style="margin-left:70px" >

		<label for="vendor">Vendor Name: </label>
		<input type="text" class="form-control id="vendor" name="vendor"placeholder="Enter Vendor Name (required)">

		</div>

		<div class="form-group" style="margin-left:70px" >

		<label for="">Bar Code Number: (SKU number)</label>
		<input type="text" class="form-control id="sku" name="sku" placeholder="Enter Sku Number (optional) ">

		</div>

		<div class="form-group" style="margin-left:70px" >

		<label for="description">Product Description: </label>
		<input type="text" class="form-control id="description" name="description" placeholder="Give us little description (optional)">

		</div>

		<div class="form-group" style="margin-left:70px" >

		<label for="image">Image.</label>
        <input class="form-control id" type="file" name="user_image" accept="image/*" placeholder="Add your image here" />

		</div>


<div class="form-group" style="margin-left:70px" >
		<button type="submit" name="btnsave" class="btn btn-default">
      	<span class="glyphicon glyphicon-upload"></span> Upload
    	</button>

		</div>
	</div>
	

	</form>